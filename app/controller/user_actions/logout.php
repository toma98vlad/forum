<?php

session_start();

if (!isset($_SESSION['user_logged'])) {
    header('Location: ../../../public/index.php');
    die();
} else {
    require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/database/manipulate.php';
    $logout = new db_manipulate;
    $logout->update('users', 'online', '0', 'username = "' . $_SESSION['user_logged'] . '"');

    session_unset();
    session_destroy();
    header('Location: ../../../public/index.php');
    die();
}

?>