<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/database/manipulate.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/inc/sanitize.php';

@$author = $_POST['author'];
@$time = $_POST['time'];
@$date = $_POST['date'];
@$title = $_POST['title'];
@$content = $_POST['content'];

$manipulate = new db_manipulate;
$sanitize = new sanitize;

$author_select = $manipulate->select('username', 'users', 'BINARY username = "' . $_SESSION['user_logged'] . '"');
$author_fetch = $manipulate->fetch_assoc($author_select);
$author = $author_fetch['username'];

$time = date('h:i:s');
$date = date('d/m/Y');

if ($sanitize->is_not_empty($author) && $sanitize->is_not_empty($title) && $sanitize->is_not_empty($time) && $sanitize->is_not_empty($date) && $sanitize->is_not_empty($content)) {
    $manipulate->insert('threads', 'author, title, time, date, content', '"' . $sanitize->sql_input($author) . '", "' . $sanitize->sql_input($title) . '", "' . $sanitize->sql_input($time) . '", "' . $sanitize->sql_input($date) . '", "' . $sanitize->sql_input($content) . '"');
}

?>