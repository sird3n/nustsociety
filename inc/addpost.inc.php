<?php
require_once 'db.inc.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $title = $_POST['Title'];
    $content = $_POST['Content'];
    $UserID = $_SESSION['user_id'];

    if (isset($_POST['Title']) && isset($_POST['Content'])) {

        if (isset($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
            $imageData = file_get_contents($_FILES['image']['tmp_name']);
            $query = 'INSERT INTO POST (Title, UserID, Image, Content) VALUES (?, ?, ?, ?)';
            $stmt = $pdo->prepare($query);

            if ($stmt->execute([$title, $UserID, $imageData, $content])) {
                header('Location: ../homepage.php');
                exit;
            }
        } else {
            $query = 'INSERT INTO POST (Title, UserID, Content) VALUES (?, ?, ?)';
            $stmt = $pdo->prepare($query);

            if ($stmt->execute([$title, $UserID, $content])) {
                header('Location: ../homepage.php');
                exit;
            }
        }
    }
}
?>