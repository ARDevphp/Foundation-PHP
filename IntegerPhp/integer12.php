<?php
$a = 567; // $sum = 765;
$b = $a / 100;//7
$s = $a % 10;
$c = $s % 10;//5
$c1 = $a / 10;//6
$a1 = $b % 10;
$a2 = $c1 % 10;
$sum = $c * 100 + $a2 * 10 + $a1;
print $a1 . "\n";
print $a2 . "\n";
print $c . "\n";
print $a . " -> " . $sum;

