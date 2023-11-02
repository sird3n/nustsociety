<?php
session_start();

require_once 'inc/db.inc.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);

?>

<nav name='nav'>
    <ul class="nav-list">
        <?php
        if (isset($_SESSION['user_id'])) {
            include 'inc/userimage.inc.php';
            echo '<div class="left">';
            echo '<li class="nav-item"><a href="homepage.php">Home</a></li>';
            echo '<li class="nav-item"><a href="eventpage.php">Event</a></li>';
            echo '<li class="nav-item"><a href="contactus.php">Contact Us</a></li>';
            echo '</div>';

            echo '<div class="right">';
            echo '<li class="addpost"><a  href="addpost.php">Add Post</a></li>';
            if ($image) {
                echo '<li class="nav-item profile-link" name="profilepiture"><a href="profilepage.php">';
                echo '<img src="data:image/jpeg;base64,' . base64_encode($image['ImageData']) . '" alt="user picture">';
                echo '</a></li>';
            }
            echo '<li class="nav-item"><a href="inc/logout.inc.php">Logout</a></li>';
        }
        echo '</div>';
        ?>
        <?php
        if (!isset($_SESSION['user_id'])) {
            echo '<div class="left">';
            echo '<li class="nav-item"><a href="homepage.php">Home</a></li>';
            echo '<li class="nav-item"><a href="contactus.php">Contact Us</a></li>';
            echo '</div>';

            echo '<div class="right">';
            echo '<li class="nav-item"><a href="registerpage.php">Register</a></li>';
            echo '<li class="nav-item"><a href="loginpage.php">Login</a></li>';
            echo '</div>';
        }
        ?>
    </ul>
</nav>