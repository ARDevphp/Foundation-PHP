<?php
$array = array(1, 2, 3, 4, 5, 1, 3, 2, 5);
$min = 1000000;
$max = 0;
$indexMax = 0;
$indexMin = 0;

for ($i = 0; $i < count($array); $i++) {
    if ($min > $array[$i]) {
        $min = $array[$i];
        $indexMin = $i;
    }
    if ($max <= $array[$i]) {
        $max = $array[$i];
        $indexMax = $i;
    }
    if ($indexMin == 0) {
        $indexMin++;
    }
    if ($indexMax == 0) {
        $indexMax++;
    }
}
echo $min . "\t" . $indexMin . "\n";
echo $max . "\t" . $indexMax;
