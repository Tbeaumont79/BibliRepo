<?php

$host = "localhost:3306";
$user = "root";
$pass = "";
$database = "bibliRepo";

$connect = mysqli_connect($host, $user, $pass, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>