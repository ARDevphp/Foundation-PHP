<?php
$a = 3;
$b = 7;
$c = 2;
$sum = $a * $b;
$sumJ = $sum / $c;
$sumF = $sumJ % 100;
$sumQ = $sum % $c;
print $sumF . "\n";
print $sumQ . "\n";