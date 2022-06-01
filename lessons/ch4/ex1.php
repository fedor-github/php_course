<?php
$numbers = [];
for ($i = 1; $i < 100; $i++) {
    $numbers[] = $i;
}
for ($j = 0; $j < count($numbers); $j++) {
    if ($numbers[$j] % 10 === 0) {
        echo $numbers[$j] . PHP_EOL;
    }
}
 echo  PHP_EOL;
$number =25;
echo ($number % 10) . PHP_EOL;

$float = 3.14;
echo "floor($float) = " . floor($float) . PHP_EOL;

echo "ceil($float) = " . ceil($float) . PHP_EOL;

echo "round($float, 1) = " . ($res = round($float)) .PHP_EOL;

printf("round($float, 1) = %f, %s \n", $res, 'Vitya');

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
    //echo "random = " . rand(10, 20) . PHP_EOL;
    $currentRand = rand(10 ,20);
    $random[$currentRand]++;
}
print_r($random);
echo "\n";


