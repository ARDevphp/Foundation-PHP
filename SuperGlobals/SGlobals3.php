<?php
$age = 32;
$name = "Ali";
$lastName = "Vli";

unset($GLOBALS['name']);
print_r($GLOBALS);

$GLOBALS['a'] = [
    "salom",
    23,
    "Alijon",
    "Valijon",
    [
        34,
        23,
        [
            "Abdulaziz",
            32
        ]
    ]
];
print_r($GLOBALS);