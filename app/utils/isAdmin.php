<?php
require_once 'app/databases/db_connect.php';

function isAdmin($pdo)
{
    if (isset($_SESSION['email'])) {
        $stmt = $pdo->prepare("SELECT * FROM users WHERE email = :email");
        $stmt->bindParam(':email', $_SESSION['email']);
        $stmt->execute();
        $user = $stmt->fetch();
        if ($user['is_admin'] == 1) {
            return true;
        }
    }
    return false;
}
