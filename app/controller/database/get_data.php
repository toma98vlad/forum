<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/database/manipulate.php';

class get_data
{
    private $get_data;

    public function __construct()
    {
        $this->get_data = new db_manipulate;
    }

    public function get_user_data($username, $data)
    {
        $result = $this->get_data->select($data, 'users', 'username = "' . $username . '"');
        $fetch_assoc = $this->get_data->fetch_assoc($result);

        return $fetch_assoc;
    }

    public function get_thread_data($id, $data)
    {
        $result = $this->get_data->select($data, 'threads', 'id = "' . $id . '"');
        $fetch_assoc = $this->get_data->fetch_assoc($result);

        return $fetch_assoc;
    }
}

?>