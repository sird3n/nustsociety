<?php
require_once ('connection.php');

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if (empty($username)) {
        echo 'Username is required.';
    } else {
        $query = 'SELECT * FROM user WHERE username = :username';
        $stmt = $pdo->prepare($query);
        $stmt->execute(['username' => $username]);
        $user = $stmt->fetch();

        if ($user) {
            $hashedPassword = $user['password'];
            if ($password == $hashedPassword) {
                // Start a session and store user data
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];

                header('Location: dashboard.php');
                exit;
            } else {
                echo 'Invalid password. Please try again.';
            }
        } else {
            echo 'User does not exist. Please check your username or register.';
        }
    }
}
?>