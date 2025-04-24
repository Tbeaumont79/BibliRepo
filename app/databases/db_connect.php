<?php

try {
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $database = "donkeyBibli";
    $pdo = new PDO("mysql:host=$host;dbname=$database", $user, $pass);
} catch (PDOException $e) {
    die("Connection failed: " . $e->getMessage());
}