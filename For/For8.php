<?php
$a = 1;
$b = 5;
$sum = 1;
if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        $sum *= $i;
        echo $sum . "\n";
    }
} else {
    echo "(a < b)";
}