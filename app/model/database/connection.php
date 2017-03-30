<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/config/config.php';

class db_connection
{
    private $dbhost;
    private $dbuser;
    private $dbpass;
    private $dbname;

    public function __construct()
    {
        $this->dbhost = constant('DB_HOST');
        $this->dbuser = constant('DB_USER');
        $this->dbpass = constant('DB_PASS');
        $this->dbname = constant('DB_NAME');
    }

    public function connect()
    {
        $conn = mysqli_connect($this->dbhost, $this->dbuser, $this->dbpass, $this->dbname);

        if ($conn) {
            return $conn;
        } else {
            return mysqli_errno();
        }

        return $conn;
    }
}

?>