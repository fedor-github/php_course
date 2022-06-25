<?php

$date = new DateTime();
echo $date->format('Y-m-d H:i:s') . PHP_EOL;

$fDate = date_create();
echo $fDate->format('Y-m-d H:i:s') . PHP_EOL;

try {
    $dt = new DateTime('error');
    echo $dt->format('Y-m-d') . PHP_EOL;
} catch (Exception $e) {
    echo 'Invalid date' . PHP_EOL;
}

$dt = new DateTime('1988-12-01 00:30:10');
echo $dt->format('l') . PHP_EOL;

$invalidDate = date_create('error');
//var_dump($invalidDate);
if ($invalidDate) {
    echo $invalidDate->format('Y-m-d H:i:s') . PHP_EOL;
} else {
    echo 'Invalid date' . PHP_EOL;
}

$correctDate = date_create('1998-05-25');
//var_dump($correctDate);
if ($correctDate) {
    echo $correctDate->format('Y-m-d H:i:s') . PHP_EOL;
} else {
    echo 'Invalid date' . PHP_EOL;
}

$utc = new DateTime('now', new DateTimeZone('UTC'));
echo DateTime::ISO8601 . PHP_EOL;

// UTC
echo $utc->format(DateTime::ISO8601) . PHP_EOL;

// MSK
$utc->setTimezone(new DateTimeZone('+0300'));
echo $utc->format(DateTime::ISO8601) . PHP_EOL;

// Tokyo
$utc->setTimezone(new DateTimeZone('Asia/Tokyo'));
echo $utc->format(DateTime::ISO8601) . PHP_EOL;

$unix = time();
echo "unix = $unix\n";

$unixDt = new DateTime("@$unix");
echo $unixDt->format(DateTime::ISO8601) . PHP_EOL;

$unixEpochStart = new DateTime('@0');
echo $unixEpochStart->format(DateTime::ISO8601) . PHP_EOL;

echo date('Y-m-d H:i:s', $unix) . PHP_EOL;
