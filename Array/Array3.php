<?php
$n = 9;
$d = 3;
$array[0] = 1;
for ($i = 1; $i < $n; $i++) {
    $array[$i] = $array[$i - 1] + $d;
    echo $array[$i] . "\t";
}
