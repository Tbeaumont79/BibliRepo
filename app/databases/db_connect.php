<?php

try {
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $database = "bibliRepo";
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}

function listElementsFromTable($table, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM $table");
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}

function getElementFromTable($table, $id, $pdo)
{
    $stmt = $pdo->prepare("SELECT * FROM $table WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

function deleteElementFromTable($table, $id, $pdo)
{
    $stmt = $pdo->prepare("DELETE FROM $table WHERE id = :id");
    $stmt->bindParam(":id", $id);
    $stmt->execute();
}

