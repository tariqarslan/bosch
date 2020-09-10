<?php

class db {

    private $host;
    private $username;
    private $password;
    private $dbname;

    protected function conenct() {

        $this->host = "localhost";
        $this->username = "root";
        $this->password = "user";
        $this->dbname = "bosch";

        $conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        return $conn;
    }
}