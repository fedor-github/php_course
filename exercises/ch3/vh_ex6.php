<?php
// #functions, #algorithms

/**
 * Create a gcd(a, b) function that calculates greatest common divisor
 * @link https://ru.wikipedia.org/wiki/%D0%9D%D0%B0%D0%B8%D0%B1%D0%BE%D0%BB%D1%8C%D1%88%D0%B8%D0%B9_%D0%BE%D0%B1%D1%89%D0%B8%D0%B9_%D0%B4%D0%B5%D0%BB%D0%B8%D1%82%D0%B5%D0%BB%D1%8C
 */

function gcd($a, $b)
{
    while ($a != 0 && $b != 0) {
    	if ($a > $b) {
    	$a = $a % $b;
		} else {
        $b = $b % $a;
		}
	} 
	return($a= $a + $b);
}
$a = gcd(12, 9);
echo "$a\n";