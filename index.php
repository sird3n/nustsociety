<?php
session_start();
if (!isset($_SESSION['session'])) {
    header('Location: /auth/login.php');
    exit;
} else {
    include ('/pages/home.php');
}
?>