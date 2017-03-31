<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/database/get_data.php';

$homepage = new get_data;

$announcement_data = $homepage->get_last_announcement('*');
$announcement_title = $announcement_data['title'];

?>