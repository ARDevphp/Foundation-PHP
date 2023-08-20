<?php
$a = 5;
$b = 10;
$c = 9;

if ($a < $b && $a < $c) {
    if ($b < $c) {
        echo $a . "\t";
        echo $b . "\t";
        echo $c . "\t";
    } else {
        echo $a . "\t";
        echo $c . "\t";
        echo $b . "\t";
    }
} else if ($b < $a && $b < $c) {
    if ($a < $c) {
        echo $b . "\t";
        echo $a . "\t";
        echo $c . "\t";
    } else {
        echo $b . "\t";
        echo $c . "\t";
        echo $a . "\t";
    }
} else if ($c < $a && $c < $b) {
    if ($a < $b) {
        echo $c . "\t";
        echo $a . "\t";
        echo $b . "\t";
    } else {
        echo $c . "\t";
        echo $b . "\t";
        echo $a . "\t";
    }
}

