<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header('Location: /pages/login.php');
} 
?>


<nav>
    <ul class="nav-list">
        <li class="nav-item"><a href="">Home</a></li>
        <li class="nav-item"><a href="">Login</a></li>
        <?php
        if (!isset($_SESSION['user_id'])) {
            echo '<li class="nav-item"><a href="">Register</a></li>';
            echo '<li class="nav-item"><a href=""><img src="" alt="user picture"></a></li>';
            echo '<li class="nav-item"><a href="">Logout</a></li>';
        }
        ?>
    </ul>
</nav>
