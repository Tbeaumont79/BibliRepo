<?php

require_once('app/databases/db_connect.php');

if (isset($_POST['create'])) {
  addBook($pdo);
  header("Location: book.php");
  exit();
}
function addBook($connect)
{
  if (isset($_POST['title']) && isset($_POST['author']) && isset($_POST['category'])) {
    $title = htmlspecialchars($_POST['title']);
    $author = htmlspecialchars($_POST['author']);
    $category = htmlspecialchars($_POST['category']);
    $stmt = $connect->prepare("SELECT * FROM authors WHERE name = :author");
    $stmt->bindParam(":author", $author);
    $stmt->execute();
    $result = $stmt->fetch();
    $author_id = $result['id'];
    if (!$result) {
      $stmt = $connect->prepare("INSERT INTO authors (name) VALUES (:author)");
      $stmt->bindParam(":author", $author);
      $result = $stmt->execute();
      $author_id = $connect->lastInsertId();
      if (!$result) {
        throw new Exception("Error adding author in database: " . $connect->error);
      }
    }
    $stmt = $connect->prepare("INSERT INTO books (title, author, category) VALUES (:title, :author, :category)");
    $stmt->bindParam(":title", $title);
    $stmt->bindParam(":author", $author);
    $stmt->bindParam(":category", $category);
    $result = $stmt->execute();
    $book_id = $connect->lastInsertId();
    $stmt = $connect->prepare("INSERT INTO book_author (book_id, author_id) VALUES (:book_id, :author_id)");
    $stmt->bindParam(":book_id", $book_id);
    $stmt->bindParam(":author_id", $author_id);
    $result = $stmt->execute();
    if (!$result) {
      throw new Exception("Error in addBook.php adding in database: " . $connect->error);
    }
  }
}
