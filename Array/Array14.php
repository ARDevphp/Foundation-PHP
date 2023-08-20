<?php
$array = [2, 4, 5, 6, 2, 1, 4, 8];

for ($i = 0; $i < count($array); $i += 2) {
    echo $array[$i] . "\t";
}

for ($i = 1; $i < count($array); $i += 2) {
    echo $array[$i] . "\t";
}