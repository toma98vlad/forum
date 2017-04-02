<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/database/get_data.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/inc/sanitize.php';

$online_users = new get_data;
//$online_users_sanitize = new sanitize;

$online_users_list = $online_users->get_online_users();

?>