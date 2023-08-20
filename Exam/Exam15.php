<?php
$array = array(2, 2, 4, 1, 5, 9, 3);
$min = 10000000;
$max = 0;
$indexMin = 0;
$maxIndex = 0;
for ($i = 0; $i < count($array); $i++) {
    if ($min > $array[$i]) {
        $min = $array[$i];
        $indexMin = $i;
    }
    if ($max < $array[$i]) {
        $max = $array[$i];
        $maxIndex = $i;
    }
}
if ($indexMin < $maxIndex) {
    echo $min . "\t" . $indexMin;
} else {
    echo $max . "\t" . $maxIndex;

}
