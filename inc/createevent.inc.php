<?php
require_once('db.inc.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $UserID = $_POST['UserID'];
    $Title = $_POST['Title'];
    $Description = $_POST['Description'];
    $imageData = file_get_contents($_FILES['image']['tmp_name']);
    $StartDate = $_POST['StartDate'];
    $EndDate = $_POST['EndDate'];

    $query = 'INSERT INTO EVENT (UserID, Title, Description, Image, StartDate, EndDate) VALUES (?,?,?,?,?,?)';
    $statement = $pdo->prepare($query);

    if ($statement->execute([$UserID, $Title, $Description, $imageData, $StartDate, $EndDate])) {
        header('Location: ../eventpage.php');
        exit;
    }
}