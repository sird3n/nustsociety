<?php
include_once('top.php')
?>

<form name="register" action="/inc/register.inc.php" method="post" enctype="multipart/form-data">
    <div class="image_input" id="image-input">
        <label for="image" class="imginp"></label>
        <input class="imginp" type="file" id="image" name="image" accept="image/*" required>
    </div>
        <div class="form_input">
        <div class="userdetails">
            <input type="text" name="name" id="name" placeholder='Name' required>
            <input type="text" name="surname" id="surname" placeholder='Surname' required>
        </div>
        <div class="credentials">
            <input type="text" name="username" id="username" placeholder='Username' required>
            <input type="password" name="password" id="password" placeholder='Password' required>
        </div>
        <input type="submit" value="Register">
        <p>Already a member <a href="login-page.php" class="button_link">LOGIN</a></p>
    </div>
</form>

<?php
include_once('bottom.php')
?>