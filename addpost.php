<?php
require_once 'top.php'
    ?>


<form name="addpost" action="inc/addpost.inc.php" method="post" enctype="multipart/form-data">
    <div class="image_input" id="image-input">
        <label for="image" class="imginp"></label>
        <input class="imginp" type="file" id="image" name="image" accept="image/*">
    </div>
    <div class="post_input">
        <input type="text" name="Title" id="Title" placeholder='Title' required>
        <textarea name="Content" id="Content" placeholder='Content' required class="custom-text-field"></textarea>
        <input type="submit" value="ADD POST">
    </div>
</form>

<?php
require_once 'bottom.php'
    ?>