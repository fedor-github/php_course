<?php
// #functions, #standard_functions

// You have a function to read the user input into an array.
function readInputToArr($hint = '') {
    if (!empty($hint) && is_string($hint)) {
        echo $hint . PHP_EOL;
    } else {
        echo "Enter values (empty to finish)\n";
    }

    $values = [];
    while ($val = readline('value = ')) {
        $values[] = $val;
    }

    return $values;
}

/**
 * Using it write a script that does the following:
 * reads a bunch of strings into an array, then sorts it (using php function sort)
 * and prints the values in upper case (using php function strtoupper).
 */
