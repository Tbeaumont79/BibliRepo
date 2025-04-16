<?php
require_once('./app/databases/db_connect.php');
if (isset($_GET['id']) && isset($_GET['title']) && isset($_GET['author']) && isset($_GET['category'])) {
  updateBook($connect);
  header("Location: book.php");
  exit();
}
  function updateBook($connect)
  {
    $id = intval($_GET['id']);
    $title = htmlspecialchars($_GET['title']);
    $author = htmlspecialchars($_GET['author']);
    $category = htmlspecialchars($_GET['category']);
  
    $stmt = $connect->prepare("UPDATE book SET title = ?, author = ?, category = ? WHERE id = ?");
    $stmt->bind_param("sssi", $title, $author, $category, $id);
    $result = $stmt->execute();
    if (!$result) {
      throw new Exception("Error updating book in databases: " . $connect->error);
    }
    $stmt->close();
  }
?>