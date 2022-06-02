<?php

// You got the following data from the DB:
$users = [
    ['f_name' => 'Madison', 'l_name' => 'Feeney'],
    ['f_name' => 'Camylle', 'l_name' => 'Dickinson'],
    ['f_name' => 'Jack', 'l_name' => 'Sanford'],
    ['f_name' => 'Pasquale', 'l_name' => 'Koch'],
    ['f_name' => 'Mable', 'l_name' => 'Wilkinson'],
    ['f_name' => 'Dorris', 'l_name' => 'Lakin'],
    ['f_name' => 'Adalberto', 'l_name' => 'Herzog'],
    ['f_name' => 'Ezra', 'l_name' => 'Carter'],
    ['f_name' => 'Dedrick', 'l_name' => 'Oberbrunner'],
    ['f_name' => 'Heather', 'l_name' => 'Brown'],
];

// But the frontend team needs the full name, formatted by the company standard, which is: "{last name} {first letter of the first name}."
// For example: "Feeney M."
// Your job is to add the key 'full_name' to each user in the $users array.

// To get the first character use the PHP substr function - https://www.php.net/manual/en/function.substr.php
// Example:
$name = 'Johnson';
$firstLetter = substr($name, 0, 1);
echo "$firstLetter\n";

// As a demonstration greet each user by his/her full name.
// For example: 'Hello Feeney M.!'
