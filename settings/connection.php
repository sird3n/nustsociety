<?php
$host = 'webdev.cg4vktva35w7.eu-north-1.rds.amazonaws.com';
$port = 3306;
$dbname = 'data';
$username = 'webdev';
$password = 'webdev01';

try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $username, $password);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    die ('Connection failed: ' . $e->getMessage());
}
?>