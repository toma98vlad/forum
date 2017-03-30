<?php

#check if logged
session_start();
if (!isset($_SESSION['user_logged'])) {
    header('Location: ' . str_replace($_SERVER['DOCUMENT_ROOT'], '', __DIR__) . '../../../../public/actions/login_page.php');
//    die();
}

?>