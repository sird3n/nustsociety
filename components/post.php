<?php

?>

<!DOCTYPE html>

<head>
    <link rel="stylesheet" href="../styles/post.css">
    <link rel="stylesheet" href="../styles/form.css">
    <link rel="stylesheet" href="../styles/reset.css">
    <title><?php $username ?>'s Forum</title>
</head>

<body>
    <div name='container'>
        <div class="image_post">
            <div class="post_header">
                <div class="post_user">
                    <div class="user_image">
                        <img src="https://media.istockphoto.com/id/1300512215/photo/headshot-portrait-of-smiling-ethnic-businessman-in-office.jpg?s=612x612&w=0&k=20&c=QjebAlXBgee05B3rcLDAtOaMtmdLjtZ5Yg9IJoiy-VY="
                            alt="">
                    </div>
                    <div class="user_information">
                        <p>simeon</p>
                        <p>Simeon Tuyoleni</p>
                    </div>
                </div>
            </div>
            <div class="post_content">
                <div class="post_image">
                    <div class="image">
                        <img src="https://media.istockphoto.com/id/1300512215/photo/headshot-portrait-of-smiling-ethnic-businessman-in-office.jpg?s=612x612&w=0&k=20&c=QjebAlXBgee05B3rcLDAtOaMtmdLjtZ5Yg9IJoiy-VY="
                            alt="">
                    </div>
                </div>
                <div class="post_text">
                    <h3>Post Title</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Iure, unde tempore quod excepturi
                        deserunt expedita labore quibusdam impedit nobis sit.</p>
                </div>
            </div>
            <div class="comments">
                <p>200</p>
                <button id='comment_toggle' class='button_link'>COMMENT</button>
            </div>
            <div id='post_comment' class="post_comment">
                <form id='comment_form' action="" method="post">
                    <input type="hidden" name="PostID" value="">
                    <input type="text" name="comment" placeholder="Add a comment">
                    <input class='button_link' type="submit" value="Submit Comment">
                </form>
                <div class="comment_container">
                    <div class="comment">
                        <div class="comment_user">
                            <div class="user_image">
                                <img src="https://media.istockphoto.com/id/1300512215/photo/headshot-portrait-of-smiling-ethnic-businessman-in-office.jpg?s=612x612&w=0&k=20&c=QjebAlXBgee05B3rcLDAtOaMtmdLjtZ5Yg9IJoiy-VY="
                                    alt="">
                            </div>
                            <div class="user_information">
                                <p>simeon</p>
                                <p>Simeon Tuyoleni</p>
                            </div>
                        </div>

                        <div class="comment_text">
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur, incidunt eveniet!
                                Debitis molestiae pariatur optio quia quaerat natus. Expedita accusantium rem vitae
                                impedit beatae molestiae consequuntur unde ea officia laboriosam.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../scripts/post.js"></script>
</body>

</html>