<?php
$array = [3, 4, 5, 3, 2, 3, 4, 5, 3, 4];//4 5 4 3 5 4 count = 6;
$count = 0;
for ($i = count($array)-1; $i > 0; $i--) {
    if ($array[$i] > $array[$i - 1]) {
        $count++;
        echo $array[$i] . "\t";
    }
}
echo $count;
