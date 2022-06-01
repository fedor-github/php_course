<?php
// #loops, #strings

// Here is an array of the Rolling Stone’s list of the greatest songs of all time
$greatestRockHits = [
    "Bob Dylan, 'Like a Rolling Stone'",
    "The Rolling Stones, '(I Can't Get No) Satisfaction'",
    "John Lennon, 'Imagine'",
    "Marvin Gaye, 'What's Going On'",
    "Aretha Franklin, 'Respect'",
    "The Beach Boys, 'Good Vibrations'",
    "Chuck Berry, 'Johnny B. Goode'",
    "The Beatles, 'Hey Jude'",
];
// Display it in descending order using a "for" loop

$lastindex = count($greatestRockHits) - 1;
for ($i = $lastindex; $i >= 0; $i--) {
 $songs = $greatestRockHits[$i];
 echo " $i, $songs \n";
} 

echo "\n\n";

// In PHP you can access a string character by its position number in the string
// For example:
$palindrome = '^step on no pets$';
echo $palindrome[4] . PHP_EOL; // will output character "p"
// Using this feature and a "for" loop, reverse the string $palindrome
// To get the string length use the PHP standard function strlen()

