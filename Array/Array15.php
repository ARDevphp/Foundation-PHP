<?php
$array = [2, 3, 4, 5, 6, 3, 9, 4];

for ($i = 1; $i < count($array); $i += 2) {
    echo $array[$i] . "\t";
}
for ($j = count($array)-2; $j >= 0; $j -= 2) {
    echo $array[$j] . "\t";
}
