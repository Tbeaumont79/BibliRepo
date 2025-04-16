<?php
require_once('./app/databases/db_connect.php');

if (isset($_GET['id'])) {
    deleteBook($connect);
    header("Location: book.php");
    exit();
}
  
function deleteBook($connect)
{
    $id = intval($_GET['id']);
    $stmt = $connect->prepare("DELETE FROM book WHERE id = ?");
    $stmt->bind_param("i", $id);
    $result = $stmt->execute();
    if (!$result) {
        throw new Exception("Error deleting book in databases: " . $connect->error);
    }
    $stmt->close();
}
?>