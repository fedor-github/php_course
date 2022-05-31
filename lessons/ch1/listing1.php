<?php

// Constants
define('FOO', 10);


// Variables
$name = 'John';
echo FOO . " Hello $name\n";

$name = 'Vasiliy';
echo FOO . ' Hello ' . $name . PHP_EOL;

$var1 = 'apples 3';
$var2 = (int)$var1;
var_dump($var1);
var_dump($var2);
if ($var1 === $var2) {
    echo "they are the same\n";
} else {
    echo "they are not the same\n";
}

$var3 = 0x4; // 101
$var4 = 0x8; // 110
$var5 = $var3 | $var4;
var_dump($var5);

$var6 = 'string';
$var7 = 10;
$var8 = $var6 && $var7;
var_dump($var8);

function foo()
{
    $name = 'Kulikov';
    echo $name . PHP_EOL;
    var_dump($GLOBALS['name']);
}

foo();
echo "\n\n";

$var10 = 'cool';
$var11 = $var10;
$var11 = 'hot';
var_dump($var10);
var_dump($var11);

echo "\n\n";

$arr = ['cat', 'dog', 'man'];
echo $arr [0] . PHP_EOL;
foreach ($arr as $idx => $object) {
    $arr[$idx] = $object . " one";
}
var_dump($arr);
