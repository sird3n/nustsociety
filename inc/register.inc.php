<?php
require_once ('db.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $username = $_POST['username'];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $imageName = $_FILES['image']['name'];
    $password = $_POST['password'];

    $query = 'INSERT INTO USER (FirstName, LastName, Username, ImageData, ImageName, Password) VALUES (?,?,?,?,?,?)';
    $statement = $pdo->prepare($query);

    if ($statement->execute([$name, $surname, $username, $imageData, $imageName, $password])) {
        header('Location: /login-page.php');
        exit;
    }
}