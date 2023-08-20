<?php
$a = 40;
$b = 56;
while ($a != $b) {
    if ($a > $b) {
        $a %= $b;
        echo $a . "\n";
    } else {
        $b %= $a;
        echo $b . "\n";
    }
    if ($a == 0) $a = $b;
    if ($b == 0) $b = $a;
}