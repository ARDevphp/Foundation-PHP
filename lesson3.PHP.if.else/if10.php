<?php
$a = 5;
$b = 1;
$c = $a;
if ($a == $b) {
    $a = 0;
    $b = 0;
    echo $a . "\n" . $b;
} else {
    $a += $b;
    $b += $c;
    echo $a . "\n";
    echo $b;
}