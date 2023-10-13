<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: http://localhost/client/pages/login.php');
    exit;
}
require_once ('../../server/handling/connection.php');
echo 'Homepage';
echo '<li><a href="logout.php">Logout</a></li>'
?>