<?php
include('top.php')
?>

<form name="login" action="inc/login.inc.php" method="post">
    <div>
        <input type="text" name="username" id="username" placeholder='Username' required>
        <input type="password" name="password" id="password" placeholder='Password' required>
    </div>
    <input type="submit" value="LOGIN">
    <p>Not a member <a href="registerpage.php" class="button_link">REGISTER</a></p>
</form>


<?php
include('bottom.php')
?>