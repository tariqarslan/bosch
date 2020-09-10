<?php

require_once('db.php');

class user extends db {

    public function getNameOfUsers() {
        $sql = "SELECT * from users";
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