<?php
require_once('./app/databases/db_connect.php');

if (isset($_GET['id'])) {
    deleteBook($pdo);
    header("Location: book.php");
    exit();
}

function deleteBook($connect)
{
    $id = intval($_GET['id']);
    $stmt = $connect->prepare("DELETE FROM book WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $result = $stmt->execute();
    if (!$result) {
        throw new Exception("Error deleting book in databases: " . $connect->error);
    }
}
