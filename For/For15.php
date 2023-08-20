<?php
$a = 4;
$b = 15;
$sum = 0;
$count = 0;
for ($i = $a; $i <= $b; $i++) {
    if ($i % 3 == 0) {
        $sum += $i;
        $count++;
    }
}
echo $sum . "\n";
echo $count;