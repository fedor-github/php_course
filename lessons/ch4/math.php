<?php

$numbers = [];
for ($i = 1; $i < 101; $i++) {
    $numbers[] = $i;
}

for ($j = 0; $j < count($numbers); $j++) {
    if ($numbers[$j] % 10 === 0) {
        echo $numbers[$j] . PHP_EOL;
    }
}

echo "\n\n";

$number = 25;
echo "$number % 10 = " . ($number % 10) . PHP_EOL;

$float = 3.14;
echo "floor($float) = " . floor($float) . PHP_EOL;
echo "ceil($float) = " . ceil($float) . PHP_EOL;
echo "round($float, 1) = " . ($res = round($float, 0)) . PHP_EOL;
printf("round($float, 1) = %f, %s\n", $res, 'John');

echo "\n\n";

$random = [
    10 => 0,
    11 => 0,
    12 => 0,
    13 => 0,
    14 => 0,
    15 => 0,
    16 => 0,
    17 => 0,
    18 => 0,
    19 => 0,
    20 => 0,
];
for ($i = 0; $i < 1000000; $i++) {
    $currentRand = rand(10, 20);
    $random[$currentRand]++;
}

print_r($random);
echo "\n";

$negative = -7;
echo abs($negative) . PHP_EOL;
$positive = 7;
echo abs($positive) . PHP_EOL;
