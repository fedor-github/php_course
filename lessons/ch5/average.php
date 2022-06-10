<?php

$trickyStr = <<<Andrey
one two ~three~ four %five% six seven
Andrey;
echo $trickyStr . PHP_EOL;

//$res = preg_match_all("/'(.+?)'/", $trickyStr, $matches);
$res = preg_match_all("/(~|%)([^~%]+)(~|%)/", $trickyStr, $matches);
//var_dump($matches);

if (empty($res)) {
    echo "Sorry, nothing found...\n";
} else {
    foreach ($matches[2] as $idx => $match) {
        echo ($idx + 1) . ": $match\n";
    }
}
