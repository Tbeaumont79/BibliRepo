<?php

$host = "localhost";
$user = "root";
$pass = "";
$database = "bibliRepo";

$connect = mysqli_connect($host, $user, $pass, $database);
if (!$connect) {
    die("Connection failed: " . mysqli_connect_error());
}
?>