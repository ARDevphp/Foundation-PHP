<?php
$a = 123;
$b = $a / 100;//1.23
$d = $a % 100;//23
$c = $b % 10;//1
$s = $d / 10;//2.3
$f = $s % 10;//2
$l = $d % 10;//3
$sum = $f * 100 + $c * 10 + $l;
print $sum;//213