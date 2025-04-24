<?php
require_once('app/databases/db_connect.php');

if (isset($_POST['create'])) {
    addAuthor($pdo, $_POST['author']);
    header("Location: authors.php");
    exit();
}

function addAuthor($connect, $author)
{
    $stmt = $connect->prepare("INSERT INTO authors (name) VALUES (:name)");
    $stmt->bindParam(":name", $author);
    $stmt->execute();
}
