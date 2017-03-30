<?php

session_start();

if (!isset($_SESSION['user_logged'])) {
    header('Location: ../../../public/index.php');
    die();
} else {
    session_unset();
    session_destroy();
    header('Location: ../../../public/index.php');
    die();
}

?>