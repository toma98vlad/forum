<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/model/database/manipulate.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/inc/sanitize.php';

class user
{
    public $logged = false;
    public $username;
    public $email;
    public $firstname;
    public $lastname;
    public $ip;
    public $user_data;
    private $sanitize;

    public function __construct()
    {
        $this->user_data = new db_manipulate;
        $this->sanitize = new sanitize;
    }

    public function register($username, $password, $email, $firstname, $lastname, $ip)
    {
        $this->user_data->insert('users', 'username, password, email, firstname, lastname, ip',
            '"' . $this->sanitize->sql_input($username) . '", "' . $this->sanitize->sql_input(md5($password)) . '", "' . $this->sanitize->sql_input($email) . '", "' . $this->sanitize->sql_input($firstname) . '", "' . $this->sanitize->sql_input($lastname) . '", "' . $this->sanitize->sql_input($ip) . '"');
    }

    public function login($username, $password)
    {
        $select = $this->user_data->select('*', 'users',
            'BINARY username = "' . $this->sanitize->sql_input($username) . '"');

        $row = $this->user_data->fetch_assoc($select);

        if ($password == $row['password']) {
            $this->logged = true;
            $this->username = $row['username'];
            $this->email = $row['email'];
            $this->firstname = $row['firstname'];
            $this->lastname = $row['lastname'];
            $this->ip = $row['ip'];

            return true;
        } else {
            return false;
        }
    }
}

?>