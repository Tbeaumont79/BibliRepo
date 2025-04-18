<?php 
    require_once('../../databases/db_connect.php');
    if (isset($_POST['create'])) {
        addAuthor($connect, $_POST['name']);
        header("Location: authors.php");
        exit();
    }
    
    function addAuthor($connect, $name)
    {
        $stmt = $connect->prepare("INSERT INTO authors (name) VALUES (:name)");
        $stmt->bindParam(":name", $name);
        $stmt->execute();
    }
?>