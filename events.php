<?php
require_once 'inc/db.inc.php';

$sql = "SELECT * FROM EVENT ORDER BY StartDate DESC";
$stmt = $pdo->query($sql);
echo '<div name="event">';
while ($data = $stmt->fetch(PDO::FETCH_ASSOC)) {
    $title = $data["Title"];
    $start = $data["StartDate"];
    $end = $data["EndDate"];
    $description = $data["Description"];
    $image = $data["Image"];

    echo '<div class="eventcontainer">
        <div class="imagecontainer">
        <img src="data:image/jpeg;base64,' . base64_encode($image) . '" alt="event image">
        </div>
        <div class="content">
            <div class="title">
                <h1>' . $title . '</h1>
            </div>
            <div class="date">
                <h2>' . $start . ' - ' . $end . '</h2>
            </div>
            <div class="description">
                <p>' . $description . '</p>
            </div>
        </div>
    </div>
    ';
}
?>