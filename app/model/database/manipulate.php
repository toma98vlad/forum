<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/forum/app/controller/checking/page_security.php';
require_once 'connection.php';

class db_manipulate extends db_connection
{
    private $conn;
    public $connected = false;

    public function __construct()
    {
        $connect = new db_connection;
        $this->conn = $connect->connect();

        if ($this->conn) {
            $this->connected = true;
        }
    }

    public function select($what, $from, $where = '')
    {
        if ($where == '') {
            $sql = 'SELECT ' . $what . ' FROM ' . $from . '';
        } else {
            $sql = 'SELECT ' . $what . ' FROM ' . $from . ' WHERE ' . $where . '';
        }

        $query = mysqli_query($this->conn, $sql);

        if (!$query) {
            return false;
        } else {
            return $query;
        }
    }

    public function insert($table, $columns = '', $values = '')
    {
        $sql = 'INSERT INTO ' . $table . '(' . $columns . ') VALUES (' . $values . ')';

        $query = mysqli_query($this->conn, $sql);

        if (!$query) {
            return false;
        } else {
            return $query;
        }
    }

    public function update($table, $column, $value, $where)
    {
        $sql = 'UPDATE ' . $table . ' SET ' . $column . ' = "' . $value . '" WHERE ' . $where;

        $query = mysqli_query($this->conn, $sql);

        if (!$query) {
            return false;
        } else {
            return $query;
        }
    }

    public function num_row($result)
    {
        $row_number = mysqli_num_rows($result);

        if (!$row_number) {
            return false;
        } else {
            return $row_number;
        }
    }

    public function fetch_array($result)
    {
        $row = mysqli_fetch_array($result);

        if (!$row) {
            return false;
        } else {
            return $row;
        }
    }

    public function fetch_assoc($result, $all = '')
    {
        if ($all == 1) {
            $rows = [];
            while ($row = mysqli_fetch_assoc($result)) {
                foreach ($row as $key => $value) {
                    $rows[] = [
                        $key => $value
                    ];
                }
            }

            if (!$rows) {
                return false;
            } else {
                return $rows;
            }
        } else {
            $row = mysqli_fetch_assoc($result);

            if (!$row) {
                return false;
            } else {
                return $row;
            }
        }
    }

//    public function fetch_all($result)
//    {
//        $data = [];
//        while ($row = mysqli_fetch_all($result)) {
//            $data[] = $row;
//        }
//
//        return $data;
//    }
}

?>