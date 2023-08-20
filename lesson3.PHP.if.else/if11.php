<?php
$a = 7;
$b = 7;

if ($a != $b) {
    if ($a > $b) {
        $b = $a;
        echo $a . "\n";
        echo $b . "\n";
    } else {
        $a = $b;
        echo $a . "\n";
        echo $b . "\n";
    }
} else {
    $a = 0;
    $b = 0;
    echo $a . "\n";
    echo $b;
}