<?php
$n = 10;
$s = 1;

if ($n > 0) {
    for ($i = 1; $i <= $n; $i++) {
        $s += ($n / $i) * 2;
        echo $s . "\n";
    }
} else {
    echo "(n > 0)";
}
