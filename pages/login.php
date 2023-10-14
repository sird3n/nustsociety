<?php
?>

<!DOCTYPE html>
<head>
 <title>login</title>
 <link rel="stylesheet" href="../styles/form.css">
 <link rel="stylesheet" href="../styles/reset.css">
</head>
<body>
    <form name="login" action="/settings/login.php" method="post">
        <div>
            <input type="text" name="username" id="username" placeholder='Username' required>
            <input type="password" name="password" id="password" placeholder='Password' required>
        </div>
        <input type="submit" value="LOGIN">
        <p>Not a member <a href="register.php" class="button_link">REGISTER</a></p>
    </form>
</body>
</html>