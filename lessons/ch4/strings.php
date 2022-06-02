<?php

$str = 'PHP is great, but hard (';

$great = substr($str, 7, 5);
echo "$great\n";

$russian = 'Мы русские с нами Бог!';
$rus = mb_substr($russian, 3, 7);
echo "$rus\n";

$words = explode(' ', $russian);
echo "Hello $words[4]\n";

$newRussian = implode('-', $words);
echo "$newRussian\n";

$range = range(0, 10);
$rangeStr = implode(', ', $range);
echo "$rangeStr\n";

$beforeBut = strstr($str, 'but', true);
echo "$beforeBut\n";

$isGod = mb_strpos($russian, 'Бог');
if ($isGod) {
    echo "It's good russian string!\n";
}
$isDevil = mb_strpos($russian, 'Диавол');
if ($isDevil === false) {
    echo "It's good russian string again!\n";
}

$superRussian = str_replace(' ', '.', $russian);
echo "$superRussian\n";
