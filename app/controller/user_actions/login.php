<?php
session_start();

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/user/user.php';

@$username_login = $_POST['username_login'];
@$password_login = $_POST['password_login'];

if (!empty(trim($username_login)) && !empty(trim($password_login))) {
    $user = new user;
    $user->login($username_login, $password_login);

    if ($user->logged) {
        $_SESSION['user_logged'] = $user->username;
        require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/database/manipulate.php';
        $login = new db_manipulate;
        $login->update('users', 'online', '1', 'username = "' . $_SESSION['user_logged'] . '"');
    }
}

header('Location: ../../../public/index.php');
die();

?>