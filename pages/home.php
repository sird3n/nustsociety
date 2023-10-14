<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /pages/login.php');
    exit;
}
require_once ('../settings/connection.php');
echo 'Homepage';
?>