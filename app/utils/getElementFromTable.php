<?php
require_once('./app/databases/db_connect.php');
function getElementFromTable($table, $id, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}
