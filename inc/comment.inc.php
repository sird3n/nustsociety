<?php
require_once 'db.inc.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['PostID'], $_POST['Content']) && $_SESSION['user_id'] !== false) {
        $postID = $_POST['PostID'];
        $content = $_POST['Content'];
        $UserID = $_SESSION['user_id'];

        $query = 'INSERT INTO COMMENT (PostID, UserID, Content) VALUES (?, ?, ?)';
        $stmt = $pdo->prepare($query);

        if ($stmt) {
            if ($stmt->execute([$postID, $UserID, $content])) {
                header('Location: ../homepage.php');
                exit();
            } else {
                echo 'Failed to execute the statement: ' . $stmt->errorInfo()[2];
            }
        } else {
            echo 'Failed to prepare the statement.';
        }
    } else {
        header('Location: ../homepage.php');
        exit();
    }
}
?>
