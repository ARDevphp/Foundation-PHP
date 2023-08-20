<?php
$array = [4, 6, 2, 5, 8, 10, 3];
$k = 2;
for ($i = 0; $i <= count($array); $i += $k) {
    echo $array[$i] . "\t";
}
