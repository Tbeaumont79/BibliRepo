<?php

session_start();

if (!isset($_SESSION['email'])) {
    header('Location: ./src/login.php');
    exit;
}
echo "<h1>bonjour ". $_SESSION['email'] ."</h1>";

?>