<?php
require_once('inc/db.inc.php');

$query = 'SELECT POST.*, USER.*
FROM POST
INNER JOIN USER ON POST.UserID = USER.UserID;
';
$data = $pdo->query($query);
?>

<div class="main" id="main">
    <div class="sidebar"></div>
    <ul name="postcontainer">
        <?php
        while ($postdata = $data->fetch(PDO::FETCH_ASSOC)) {
            echo '<li class="image_post">';
            echo '<div class="post_header">';
            echo '<div class="post_user">';
            echo '<div class="user_image">';
            echo '<img src="data:image/jpeg;base64,' . base64_encode($postdata['ImageData']) . '" alt="user picture">';
            echo '</div>';
            echo '<div class="user_information">';
            echo '<p>' . $postdata["Username"] . '</p>';
            echo '<p>' . $postdata["FirstName"], ' ', $postdata["LastName"] . '</p>';
            echo '</div>';
            echo '</div>';
            echo '</div>';
            echo '<div class="post_content">';
            if (!empty($postdata['Image'])) {
                echo '<div class="post_image">';
                echo '<div class="image">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($postdata['Image']) . '" alt="user picture">';
                echo '</div>';
                echo '</div>';
            }
            echo '<div class="post_text">';
            echo '<h3>' . $postdata["Title"] . '</h3>';
            echo '<p>' . $postdata["Content"] . '</p>';
            echo '</div>';
            echo '</div>';

            $queryComments = 'SELECT COMMENT.*, USER.* 
            FROM COMMENT 
            INNER JOIN USER ON COMMENT.UserID = USER.UserID 
            WHERE COMMENT.PostID = :PostID
            ORDER BY COMMENT.ID DESC';

            $stmt = $pdo->prepare($queryComments);
            $stmt->bindParam(':PostID', $postdata['ID']);
            $stmt->execute();
            $dataComments = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo '<div class="comments">';
            echo '<p>' . count($dataComments) . '</p>';
            echo '<button id="comment_toggle" class="button_link">COMMENT</button>';
            echo '</div>';
            echo '<div id="post_comment" class="post_comment">';
            echo '<form id="comment_form" action="inc/comment.inc.php" method="post">';
            echo '<input type="hidden" name="PostID" value="' . $postdata["ID"] . '">';
            echo '<input type="text" name="Content" placeholder="Add a comment">';
            echo '<input class="button_link" type="submit" value="Submit Comment">';
            echo '</form>';

            echo '<div class="comment_container">';
            foreach ($dataComments as $rowComment) {
                echo '<div class="comment">';
                echo '<div class="comment_user">';
                echo '<div class="user_image">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($rowComment['ImageData']) . '" alt="user picture">';
                echo '</div>';
                echo '<div class="user_information">';
                echo '<p>' . $rowComment["Username"] . '</p>';
                echo '<p>' . $rowComment["FirstName"] . ' ' . $rowComment["LastName"] . '</p>';
                echo '</div>';
                echo '</div>';
                echo '<div class="comment_text">';
                echo '<p>' . $rowComment["Content"] . '</p>';
                echo '</div>';
                echo '</div>';
            }
            echo '</div>';
            echo '</div>';


        }
        echo '</div>';
        echo '</div>';

        ?>
    </ul>
</div>