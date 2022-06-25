<?php

function printArray($arr, $indent = '') 
{
    if (!is_array($arr)) {
        return;
    }

    echo "[\n";
    foreach ($arr as $key => $val) {
        if (is_array($val)) {
            echo $indent . "  $key => ";
            printArray($val, $indent . '  ');
        } else {
            echo $indent . "  $key => $val,\n";
        }
    }
    if ($indent === '') {
        echo $indent . "]\n";
    } else {
        echo $indent . "],\n";
    }
}


$fruits = [
    'ban' => 'bananas',
    [
        'apples',
        'pears',
        'citrus' => [
            'oranges',
            'lemons',
            [
                'foo',
                'bar',
            ]
        ]
    ],
    'peaches',
    [
        'strawberries',
        'blackberries',
    ]
];

printArray($fruits);
