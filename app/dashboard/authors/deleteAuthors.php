<?php
require_once('./app/databases/db_connect.php');

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);
    deleteAuthor($id, $pdo);
    header('Location: authors.php');
    exit();
}
function deleteAuthor($id, $connect) {
    $stmt = $connect->prepare("DELETE FROM authors WHERE id = :id");
    $stmt->bindParam(':id', $id);
    $stmt->execute();
}

?>