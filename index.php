<?php

error_reporting(E_ALL);
require_once('user.php');

$u = new user();
$data = $u->getNameOfUsers(['ass', "tar"]);

if ($data) {
    print_r($data);
} else {
    echo("no record found");
}