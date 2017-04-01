<html>
<head>
    <link rel="stylesheet" type="text/css" href="css/main.css">
</head>
<body>

<?php

//session_start();
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/view/homepage.php';

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/public/inc/user_menu.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/public/inc/banner.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/public/inc/navigation_menu.php';

?>

<div class="content_wrapper">
    <div class="content_container">
        <div class="cassette_wrapper">
            <div class="cassette_title">
                Announcements
            </div>
            <div class="cassette_container">
                <?php
                include 'inc/thread_preview.php';
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
