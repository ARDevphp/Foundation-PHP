<?php
$n = 10;
$s = 1;
if ($n > 0) {
    for ($i = 2; $i < $n; $i++) {
        $s += 1 / $i;
        echo $s . "\n";
    }
}