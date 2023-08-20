<?php
$a = 5;
$b = 10;
if ($a < $b) {
    for ($i = $a; $i <= $b; $i++) {
        $sumK = $i * 4;
        $sumY += $sumK;
        echo $sumK . "\n";
    }
} else {
    echo "(a < b)";
}
echo $sumY;