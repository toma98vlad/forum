<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/database/manipulate.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/inc/sanitize.php';

@$author = $_POST['author'];
@$time = $_POST['time'];
@$date = $_POST['date'];
@$title = $_POST['title'];
@$content = $_POST['content'];

$create_thread_manipulate = new db_manipulate;
$create_thread_sanitize = new sanitize;

$author_select = $create_thread_manipulate->select('username', 'users', 'BINARY username = "' . $_SESSION['user_logged'] . '"');
$author_fetch = $create_thread_manipulate->fetch_assoc($author_select);
$author = $author_fetch['username'];

$time = time();
$date = date('d/m/Y');

if ($create_thread_sanitize->is_not_empty($author) && $create_thread_sanitize->is_not_empty($title) && $create_thread_sanitize->is_not_empty($time) && $create_thread_sanitize->is_not_empty($date) && $create_thread_sanitize->is_not_empty($content)) {
    $create_thread_manipulate->insert('threads', 'author, title, time, date, content', '"' . $create_thread_sanitize->sql_input($author) . '", "' . $create_thread_sanitize->sql_input($title) . '", "' . $create_thread_sanitize->sql_input($time) . '", "' . $create_thread_sanitize->sql_input($date) . '", "' . $create_thread_sanitize->sql_input($content) . '"');
}

?>