<?php

require_once('db.php');

class user extends db {

    public function getNameOfUsers($combinations) {
        $regexp = implode("|", $combinations);
        $sql = "SELECT first_name, last_name from users where CONCAT(first_name, ' ', last_name) REGEXP '{$regexp}'";
        $result = $this->conenct()->query($sql);
        $num_rows = $result->num_rows;

        if($num_rows > 0) {
            while($row = $result->fetch_assoc()) {
                $data[] = $row;
            }

            return $data;
        }
    }
}