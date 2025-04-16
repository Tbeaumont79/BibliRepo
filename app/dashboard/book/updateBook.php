<?php
require_once('./app/databases/db_connect.php');
if (isset($_GET['id']) && isset($_GET['title']) && isset($_GET['author']) && isset($_GET['category'])) {
  updateBook($pdo);
  header("Location: book.php");
  exit();
}
function updateBook($connect)
{
  $id = intval($_GET['id']);
  $title = htmlspecialchars($_GET['title']);
  $author = htmlspecialchars($_GET['author']);
  $category = htmlspecialchars($_GET['category']);

  $stmt = $connect->prepare("UPDATE book SET title = :title, author = :author, category = :category WHERE id = :id");
  $stmt->bindParam(":id", $id);
  $stmt->bindParam(":title", $title);
  $stmt->bindParam(":author", $author);
  $stmt->bindParam(":category", $category);
  $result = $stmt->execute();
  if (!$result) {
    throw new Exception("Error updating book in databases: " . $connect->error);
  }
}
