<?php
require_once 'db.inc.php';
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['PostID']) && isset($_POST['Content'])) {
        $postID = $_POST['PostID'];
        $content = $_POST['Content'];
        $UserID = $_SESSION['user_id'];

        $query = 'INSERT INTO COMMENT (PostID, UserID, Content) VALUES (?, ?, ?)';
        $stmt = $pdo->prepare($query);

        if ($stmt) {
            $stmt->execute([$postID, $UserID, $content]);
            echo 'Comment added successfully.';
        } else {
            echo 'Failed to prepare the statement.';
        }
    } else {
        header('Location: ../homepage.php');
    }
}
?>