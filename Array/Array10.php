<?php
$array = [2,3, 5, 6, 4, 42, 5, 67, 6];
for ($i = 0; $i < count($array)-1; $i++) {
    if ($array[$i] % 2 == 0) {
        echo $array[$i]."\t";
    }
}

for ($i = count($array)-1; $i >= 0; $i--) {
    if ($i % 2 == 1) {
        echo $array[$i]."\t";
    }
}
