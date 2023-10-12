<?php
$host = '192.168.188.146';
$dbname = 'storage';
$username = 'webdev';
$password = 'password';

$dsn = "mysql:host=$host;dbname=$dbname";

try {
    $pdo = new PDO($dsn, $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die ('Connection failed: ' . $e->getMessage());
}
?>