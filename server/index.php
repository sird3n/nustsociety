<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /client/pages/login.php');
    exit;
} else {
    include ('../client/pages/home.php');
}
?>