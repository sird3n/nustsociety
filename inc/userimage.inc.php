<?php
$sql = 'SELECT ImageData FROM USER WHERE Username = ?';
$stmt = $pdo->prepare($sql);
$stmt->execute([$_SESSION['username']]);
$image = $stmt->fetch(PDO::FETCH_ASSOC);
?>
