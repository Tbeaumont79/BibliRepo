<?php
require_once('./app/databases/db_connect.php');

function deleteElementFromTable($table, $id, $pdo)
{
    $stmt = $pdo->prepare("DELETE FROM $table WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}
