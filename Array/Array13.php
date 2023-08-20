<?php
$array = [3, 5, 7, 8, 2, 1, 7, 8];

for ($i = 1; $i < count($array); $i += 2) {
    echo $array[$i] . "\t";
}