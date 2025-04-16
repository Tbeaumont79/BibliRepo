<?php

require_once('./app/databases/db_connect.php');

if (isset($_POST['create'])) {
    addBook($connect);
    header("Location: book.php");
    exit();
  }
  function addBook($connect)
  {
    if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['category'])) {
      $title = htmlspecialchars($_POST['title']);
      $author = htmlspecialchars($_POST['author']);
      $category = htmlspecialchars($_POST['category']);
      $stmt = $connect->prepare("INSERT INTO book (title, author, category) VALUES (?, ?, ?)");
      $stmt->bind_param("sss", $title, $author, $category);
      $result = $stmt->execute();
      if (!$result) {
        throw new Exception("Error adding book in database: " . $connect->error);
      }
      $stmt->close();
    }
  }
?>