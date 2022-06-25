<?php

$email = 'Fedor@MAIL.com';
$invalidEmail = '@mail.com';
$abr = ';;;;;0298     457 sdfg  sa^df;       23049875;;;;';
$blank = '';

echo "preg_match---------------------\n";
foreach ([$email, $invalidEmail, $abr, $blank] as $i => $val) {
    $isEmail = preg_match('/^[a-z]+@[a-z]+\.[a-z]{2,4}$/', $val);

    if ($isEmail) {
        echo $i . ': ' . ' valid   - ' . $val . PHP_EOL;
    } else {
        echo $i . ': ' . ' invalid - ' . $val . PHP_EOL;
    }
}

//$trimmedAbr = trim($abr, ';');
//echo "$trimmedAbr\n\n";

echo "\npreg_replace---------------------\n";
$newAbr = preg_replace('/[0-9;\s\^]/', '*', $abr);
echo "$newAbr\n";


echo "\nnegative regex pattern---------------------\n";
$john = 'John Foreman';
$david = 'David P. Harrison';

foreach ([$john, $david] as $name) {
    if (preg_match('/^[^\.]+$/', $name)) {
        echo 'Hello ' . $name . '!' . PHP_EOL;
    } else {
        echo "Invalid name < $name >\n";
    }
}
