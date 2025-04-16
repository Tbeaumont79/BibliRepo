<?php
require_once('./app/databases/db_connect.php');
$edit = false;
if (isset($_POST['edit']) && isset($_POST['book_id'])) {
    $books = [];
    $edit = !$edit;
  }
if (isset($_POST['save']) && isset($_POST['book_id'])) {
    $edit = false;
    updateBook($connect);
    header("Location: book.php");
    exit();
  }
  function updateBook($connect)
  {
    $id = intval($_POST['book_id']);
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $category = htmlspecialchars($_POST['category']);
  
    $stmt = $connect->prepare("UPDATE book SET title = ?, author = ?, category = ? WHERE id = ?");
    $stmt->bind_param("sssi", $title, $author, $category, $id);
    $result = $stmt->execute();
    if (!$result) {
      throw new Exception("Error updating book in databases: " . $connect->error);
    }
    $stmt->close();
  }
?>