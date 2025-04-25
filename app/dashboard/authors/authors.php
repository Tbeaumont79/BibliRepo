<?php
require_once('app/databases/db_connect.php');
require_once('app/utils/deleteElementFromTable.php');
require_once('app/utils/isAdmin.php');
require_once('app/utils/listElementFromTable.php');
if (!isAdmin($pdo)) {
    header('Location: /');
    exit();
}
$authors = loadAuthors($pdo);
$edit = false;
function loadAuthors($connect)
{
    $authors = [];
    $stmt = $connect->prepare("SELECT * FROM authors;");
    $stmt->execute();
    $authors = $stmt->fetchAll();
    return $authors;
}

function getTotalBookWritten($id, $connect)
{
    $stmt = $connect->prepare("SELECT COUNT(*)
FROM book_author
WHERE author_id = :id ;");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    $result = $stmt->fetch();
    return $result[0];
}

if (isset($_POST['delete']) && isset($_POST['author_id'])) {
    $id = $_POST['author_id'];
    deleteElementFromTable('authors', $id, $pdo);
    header("Location: authors.php");
    exit();
}

if (isset($_POST['edit']) && isset($_POST['author_id'])) {
    $authors = [];
    $edit = !$edit;
    $authors = listElementsFromTable('authors', $pdo);
}
if (isset($_POST['save']) && isset($_POST['author_id'])) {
    $id = $_POST['author_id'];
    $author = listElementsFromTable('authors', $pdo);

    if (!$author) {
        die("Author not found");
    }
    $author = $_POST['author'] ? $_POST['author'] : $author['name'];
    print_r($author);
    header("Location: updateAuthors.php?id=" . $id . "&author=" . $author);
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../styles/style.css">
</head>

<body>
    <?php require('./app/dashboard/sideMenu.php'); ?>
    <main class="p-10 max-w-4/5 ml-72">
        <div class="px-4 sm:px-6 lg:px-8">
            <div class="sm:flex sm:items-center">
                <div class="sm:flex-auto">
                    <h1 class="text-base font-semibold text-gray-900">Authors</h1>
                    <p class="mt-2 text-sm text-gray-700">A list of all Authors in your Database including their id, name and the number of books they have written.</p>
                </div>
            </div>
            <div class="mt-8 flow-root">
                <div class="-mx-4 -my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 align-middle sm:px-6 lg:px-8">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead>
                                <tr>
                                    <th scope="col" class="py-3.5 pr-3 pl-4 text-left text-sm font-semibold text-gray-900 sm:pl-0">
                                        <a href="#" class="group inline-flex">
                                            id
                                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                            <span class="invisible ml-2 flex-none rounded-sm text-gray-400 group-hover:visible group-focus:visible">
                                                <svg class="size-5" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Author
                                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                            <span class="invisible ml-2 flex-none rounded-sm text-gray-400 group-hover:visible group-focus:visible">
                                                <svg class="invisible ml-2 size-5 flex-none rounded-sm text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                    <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                        <a href="#" class="group inline-flex">
                                            Number of book written
                                            <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
                                            <span class="invisible ml-2 flex-none rounded-sm text-gray-400 group-hover:visible group-focus:visible">
                                                <svg class="invisible ml-2 size-5 flex-none rounded-sm text-gray-400 group-hover:visible group-focus:visible" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                                    <path fill-rule="evenodd" d="M5.22 8.22a.75.75 0 0 1 1.06 0L10 11.94l3.72-3.72a.75.75 0 1 1 1.06 1.06l-4.25 4.25a.75.75 0 0 1-1.06 0L5.22 9.28a.75.75 0 0 1 0-1.06Z" clip-rule="evenodd" />
                                                </svg>
                                            </span>
                                        </a>
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                                <?php
                                if ($authors && count($authors) > 0) {
                                    for ($i = 0; $i < count($authors); $i++) {
                                ?>
                                        <tr>
                                            <form action="authors.php" method="POST">
                                                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo $authors[$i]['id'] ?></td>
                                                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo $edit == true ? '<input class="border-1 rounded-md border-purple-600 p-2" type="text" name="author" placeholder="Author">' : $authors[$i]['name'] ?></td>
                                                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo getTotalBookWritten($authors[$i]['id'], $pdo) ?></td>
                                                <td class="relative py-4 pr-4 pl-3 text-right text-sm whitespace-nowrap sm:pr-0">
                                                <th scope="col" class="relative py-3.5 pr-0 pl-3">
                                                    <span class="sr-only">Edit</span>
                                                    <input type="hidden" name="author_id" value="<?php echo $authors[$i]['id']; ?>" />
                                                    <?php echo $edit == true && $_POST['author_id'] == $authors[$i]['id'] ? '<button type="submit" class="text-indigo-600 hover:text-indigo-900" name="save">Save</button>' : '<button type="submit" class="text-indigo-600 hover:text-indigo-900" name="edit">Edit</button>' ?>
                                                    <span class="sr-only">Delete</span>
                                                    <input type="hidden" name="author_id" value="<?php echo $authors[$i]['id']; ?>" />
                                                    <button type="submit" class="text-indigo-600 hover:text-indigo-900" name="delete">Delete</button>
                                                </th>
                                                </td>
                                            </form>
                                        </tr>

                                <?php }
                                } ?>
                                <tr>
                                    <form action="addAuthors.php" method="POST">
                                        <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo 'id'; ?></td>
                                        <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><input class="border-1 rounded-md border-purple-600 p-2" type="text" name="author" placeholder="Author" /></td>
                                        <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><button type="submit" name="create" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add User</button></td>
                                    </form>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
    </main>
</body>

</html>