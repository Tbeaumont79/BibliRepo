<?php
require_once('app/databases/db_connect.php');

if (isset($_GET['id']) && isset($_GET['author'])) {
    updateAuthor($pdo);
    header("Location: authors.php");
    exit();
}

function updateAuthor($connect)
{
    $id = intval($_GET['id']);
    $author = htmlspecialchars($_GET['author']);
    $stmt = $connect->prepare("UPDATE authors SET name = :author WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->bindParam(":author", $author);
    $result = $stmt->execute();
    if (!$result) {
        throw new Exception("Error updating author in databases: " . $connect->error);
    }
}
