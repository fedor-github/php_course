<?php
// #arrays, #loops

// Create arrays:
$family = [
    'Irina',
    'Vladimir',
    'Nikita',
    'Andrey',
]; // contains the names of all your family members
$memberHeight = [
    'Irina' => 175,
    'Vladimir' => 182,
    'Nikita' => 178,
    'Andrey' => 180,
]; // associative array that maps the family member name to his/her height in cm (ex. 'Andrey' => 180)

/* Then do the following:
 *  1. var_dump all arrays
 *  2. using all variants of php loops (while, for, foreach) print all family info in the following format: 'Member Andrey is 180 tall'
 */


//var_dump($family);
//var_dump($memberHeight);
echo 'loop for' . PHP_EOL;
for ($i = 0; $i < count($family); $i = $i + 1) {
    $name = $family[$i];

    if (empty($memberHeight[$name])) {
        echo "Member $name not found\n";
        continue;
    }
    $height = $memberHeight[$name];
    echo "Member $name is $height tall\n";
}
echo PHP_EOL;

echo 'loop foreach' . PHP_EOL;
foreach ($memberHeight as $name => $height) {
    echo "Member $name is $height tall\n";
}
echo PHP_EOL;

echo 'loop while' . PHP_EOL;
$i = 0;
while ($i < count($family)) {
    $name = $family[$i];
    $height = $memberHeight[$name];

    echo "Member $name is $height tall!\n";

    $i = $i + 1;
}
echo PHP_EOL;
