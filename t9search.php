<?php

function find_combinations($keypad, $input, $index, $result="") {

    // if we have processed every digit of key, return the result
    if($index == -1) {
        echo($result);
        return;

    }

    // stores current digit
    $digit = $input[$index];

    // size of the list corresponding to current digit
    $length = count($keypad[$digit]);

    // one by one replace the digit with each character in the corresponding list and recur for next digit
    for ($i = 0; $i < $length; $i++) {
        find_combinations($keypad, $input, $index - 1, $keypad[$digit][$i] . $result);
    }
}

function get_combinations($input) {
    $keypad = [
        # 0 and 1 digit don't have any characters associated
        [],
        [],
        ['A', 'B', 'C'],
        ['D', 'E', 'F'],
        ['G', 'H', 'I'],
        ['J', 'K', 'L'],
        ['M', 'N', 'O'],
        ['P', 'Q', 'R', 'S'],
        ['T', 'U', 'V'],
        ['W', 'X', 'Y', 'Z']
    ];

    $combinations = find_combinations($keypad, $input, count($input) - 1);
    return $combinations;
}