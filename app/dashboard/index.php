<?php
require_once('app/utils/isAdmin.php');
require_once('app/databases/db_connect.php');
if (!isAdmin($pdo)) {
  header('Location: /');
  exit();
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="../styles/style.css">
</head>

<body>
  <?php require_once('app/dashboard/sideMenu.php') ?>
  <main>
    <div class="bg-gray-50 h-screen ml-20 py-24 sm:py-32">
      <div class="mx-auto max-w-2xl px-6 lg:max-w-7xl lg:px-8">
        <h2 class="text-center text-base/7 font-semibold text-indigo-600">Dashboard</h2>
        <p class="mx-auto mt-2 max-w-lg text-center text-4xl font-semibold tracking-tight text-balance text-gray-950 sm:text-5xl">Welcome to the admin Panel</p>
      </div>
    </div>
  </main>
</body>

</html>