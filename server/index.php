<?php
session_start();
if (!isset($_SESSION['session'])) {
    header('Location: /server/auth/login.php');
    exit;
} else {
    include ('../pages/home.php');
}
?>