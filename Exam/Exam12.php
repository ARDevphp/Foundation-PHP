<?php
$array = array(2, 0, 4, 5, 2, 4);
$min = 1;
$max = 1;
for ($i = 0; $i < count($array); $i++) {
    if ($min > $array[$i]) {
        $min = $array[$i];
    }
    if ($max < $array[$i]) {
        $max = $array[$i];
    }
}
echo $min . "\n" . $max;
