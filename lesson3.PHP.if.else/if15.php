<?php
$a = 4;
$b = 15;
$c = 21;

if (($a > $b && $b > $c)) {
    echo $a . "\t";
    echo $b . "\t";
} else if ($a > $b && $c > $b) {
    echo $a . "\t";
    echo $c . "\t";
} else if ($b > $a && $a > $c) {
    echo $b . " \t";
    echo $a . " \t";
} else if ($b > $a && $c > $a) {
    echo $b . "\t";
    echo $c . "\t";

} else if ($c > $a && $a > $b) {
    echo $c . "\t";
    echo $a . "\t";
} else if ($c > $b && $b > $a) {
    echo $c . "\t";
    echo $b . "\t";
}