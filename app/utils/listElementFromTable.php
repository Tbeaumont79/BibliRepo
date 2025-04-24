<?php
require_once('./app/databases/db_connect.php');

function listElementsFromTable($table, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
