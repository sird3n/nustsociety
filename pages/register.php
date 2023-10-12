<?php

?>
<!DOCTYPE html>
<head>
    <title>Register</title>
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/reset.css">
</head>
<body>
    <form name="register" action="http://localhost/server/handling/register.php" method="post">
        <div class="image_input" id="image-input">
            <label for="image" class="imginp"></label>
            <input class="imginp" type="file" id="image" name="image" accept="image/*">
        </div>
         <div class="form_input">
            <div class="userdetails">
                <input type="text" name="name" id="name" placeholder='Name'>
                <input type="text" name="surname" id="surname" placeholder='Surname'>
            </div>
            <div class="credentials">
                <input type="text" name="username" id="username" placeholder='Username'>
                <input type="password" name="password" id="password" placeholder='Password'>
            </div>
            <input type="submit" value="Register">
            <p>Already a member <a href="login.php" class="button_link">LOGIN</a></p>

       </div>
    </form>
<script src="../scripts/image_input.js"></script>
</body>
</html>