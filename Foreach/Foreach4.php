<?php
$array = [1, 2, 3, 4, 5];//32
$sum = 1;
$daraja = 1;
foreach ($array as $item) {
    $sum = $daraja * 2;
    $daraja = $sum;
    echo $sum . "\t";
}
