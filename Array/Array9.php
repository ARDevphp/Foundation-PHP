<?php
$array = [3, 5, 6, 4, 42, 5, 67, 6];
$count = 0;
for ($i = count($array)-1; $i >= 0; $i--) {
    if ($array[$i] % 2 == 0) {
        $count++;
        echo $array[$i] . "\t";
    }
}
echo "\n";
echo $count;