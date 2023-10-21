<?php
session_start();
?>
<nav name='nav'>
    <ul class="nav-list">
        <?php
        if (isset($_SESSION['user_id'])) {
            echo '<li class="nav-item"><a href="homepage.php">Home</a></li>';
            echo '<li class="nav-item"><a href="eventpage.php">Event</a></li>';
            echo '<li class="nav-item"><a href=""><img src="" alt="user picture"></a></li>';
            echo '<li class="nav-item"><a href="inc/logout.inc.php">Logout</a></li>';
        }
        ?>
        <?php
        if (!isset($_SESSION['user_id'])) {
            echo '<li class="nav-item"><a href="homepage.php">Home</a></li>';
            echo '<li class="nav-item"><a href="registerpage.php">Register</a></li>';
            echo '<li class="nav-item"><a href="loginpage.php">Login</a></li>';
        }
        ?>
    </ul>
</nav>
