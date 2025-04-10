<?php
require('./databases/db_connect.php');
$books = [];
$is_fetched = false;
if ($is_fetched == false) {
    $books = loadBook($connect);
    $is_fetched = true;
}
function loadBook($connect)
{
    $books = [];
    $stmt = $connect->query("SELECT * FROM book");
    if ($stmt->num_rows > 0) {
        for ($i = 0; $i < $stmt->num_rows; $i++) {
            array_push($books, $stmt->fetch_assoc());
        }
    }
    return $books;
}
if (isset($_POST['create'])) {
    $books = [];
    addBook($connect);
    $books = loadBook($connect);

}

if (isset($_POST['delete']) && isset($_POST['book_id'])) {
    $books = [];
    deleteBook($connect);
    $books = loadBook($connect);
}
function deleteBook($connect)
{
    $id = $_POST['book_id'];
    $stmt = $connect->query("DELETE FROM book WHERE book.id = " . $id . "");
    if (!$stmt) {
        throw new Exception("Error deleting book in databases");
    }

}
function addBook($connect)
{
    if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['category'])) {
        $title = $_POST['title'];
        $author = $_POST['author'];
        $category = $_POST['category'];

        $stmt = $connect->query('INSERT INTO book (title, author, category) VALUES ("' . $title . '", "' . $author . '", "' . $category . '")');
        if (!$stmt) {
            throw new Exception("Error adding book in database");
        }
    }
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
  <main class="p-10">

<div class="px-4 sm:px-6 lg:px-8">
  <div class="sm:flex sm:items-center">
    <div class="sm:flex-auto">
      <h1 class="text-base font-semibold text-gray-900">Books</h1>
      <p class="mt-2 text-sm text-gray-700">A list of all books in your Database including their id, title, author and category.</p>
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
                  Title
                  <!-- Active: "bg-gray-200 text-gray-900 group-hover:bg-gray-300", Not Active: "invisible text-gray-400 group-hover:visible group-focus:visible" -->
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
                  Category
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
           if ($books && count($books) > 0) {
               for ($i = 0; $i < count($books);  $i++) {
                   ?>
            <tr>
                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo $books[$i]['id'] ?></td>
                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo $books[$i]['title'] ?></td>
                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo $books[$i]['author'] ?></td>
                <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo $books[$i]['category'] ?></td>
                <td class="relative py-4 pr-4 pl-3 text-right text-sm whitespace-nowrap sm:pr-0">
                  <th scope="col" class="relative py-3.5 pr-0 pl-3">
                    <form action="book.php" method="POST">
                      <span class="sr-only">Delete</span>
                      <input type="hidden" name="book_id" value="<?php echo $books[$i]['id']; ?>" />
                      <button type="submit" class="text-indigo-600 hover:text-indigo-900" name="delete">Delete</button>
                    </form>
                  </th>
                </td>
              </tr>
          
            <?php }
               } ?>
            <tr>
                <form action="book.php" method="POST">
                  <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><?php echo "id" ?></td>
                  <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><input class="border-1 rounded-md border-purple-600 p-2" type="text" name="title" placeholder="Title"/></td>
                  <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><input class="border-1 rounded-md border-purple-600 p-2" type="text" name="author" placeholder="Author"/></td>
                  <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><input class="border-1 rounded-md border-purple-600 p-2" type="text" name="category" placeholder="Category"/></td>
                  <td class="py-4 pr-3 pl-4 text-sm font-medium whitespace-nowrap text-gray-900 sm:pl-0"><button type="submit" name="create" class="block rounded-md bg-indigo-600 px-3 py-2 text-center text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Add book</button></td> 
                </form>
              </tr>
            <!-- More people... -->
          </tbody>
        </table>
      </div>
    </div>
    </main>
</body>
</html>