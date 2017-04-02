<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/database/get_data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/inc/sanitize.php';

$homepage = new get_data;
$homepage_sanitize = new sanitize;

$announcement_data = $homepage->get_last_announcement('*');
$announcement_title = $homepage_sanitize->sql_output($announcement_data['title']);
$announcement_content = $homepage_sanitize->sql_output($announcement_data['content']);
$announcement_author = $homepage_sanitize->sql_output($announcement_data['author']);
$announcement_date = $homepage_sanitize->sql_output($announcement_data['date']);
$announcement_time = $homepage_sanitize->sql_output($announcement_data['time']);
$announcement_likes = $homepage_sanitize->sql_output($announcement_data['likes']);
$announcement_dislikes = $homepage_sanitize->sql_output($announcement_data['dislikes']);

?>