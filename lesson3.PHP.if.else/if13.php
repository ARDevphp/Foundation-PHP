<?php
$a = 8;
$b = 9;
$c = 11;

if (($a > $b && $a < $c) || ($a < $b && $a > $c)) {
    echo $a;
} else if (($b < $a && $b > $c) || ($b > $a && $b < $c)) {
    echo $b;
} else if (($c > $a && $c < $b) || ($c < $a && $c > $b)) {
    echo $c;
}