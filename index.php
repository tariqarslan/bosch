<?php

error_reporting(E_ALL);
require_once('user.php');
require_once('t9search.php');

$digits = "277";
$combinations = get_combinations(str_split($digits));

$u = new user();
$data = $u->getNameOfUsers($combinations);

if ($data) {
    print_r($data);
} else {
    echo("no record found");
}