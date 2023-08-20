<?php
$a = 1;
$b = 9;
$sum = 0;
if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        $sum += $i;
        echo "a dan b gacho sonlar yig'indisi " . $sum . "\n";
    }
} else {
    echo "(a < b";
}