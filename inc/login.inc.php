<?php
require_once ('db.inc.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = 'SELECT * FROM USER WHERE Username = :username';
    $statement = $pdo->prepare($query);
    $statement->execute([':username' => $username]);
    $user = $statement->fetch();

    if ($user) {
        $userPassword = $user['Password'];
        if ($password == $userPassword) {
            // Start a session and store user data
            $_SESSION['user_id'] = $user['UserID'];
            $_SESSION['username'] = $user['Username'];

            header('Location: ../homepage.php');
            exit;
        } else {
            header('Location: ../loginpage.php');
        }
    } else {
        header('Location: ../registerpage.php');
    }
}