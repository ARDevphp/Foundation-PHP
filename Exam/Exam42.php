<?php
function insertion_Sort($my_array)
{
    for ($i = 0; $i < count($my_array); $i++) {
        $val = $my_array[$i];
        $j = $i - 1;
        while ($j >= 0 && $my_array[$j] > $val) {
            $my_array[$j + 1] = $my_array[$j];
            $j--;
        }
        $my_array[$j + 1] = $val;
    }
    return $my_array;
}

$test_array = array(3, 3, 2, 5, 2, 9, 1);

echo implode(', ', $test_array);

print_r(insertion_Sort($test_array));