<?php
$array = array(3, 4, 5, 1, 1, 5, 6, 2);
$min = 100000000;
$index = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($min > $array[$i]) {
        $min = $array[$i];
        $index = $i;
    }
}
echo $min . "\n";
echo $index;