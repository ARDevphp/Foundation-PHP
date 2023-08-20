<?php
$array = [4, 5, 4, 3, 6, 4, 5, 3];
$min = 0;

for ($i = 0; $i < count($array) - 1; $i++) {
    if ($array[$i] > $array[$i + 1]) {
        $min++;
        echo $array[$i] . "\t";
    }
}
echo $min;