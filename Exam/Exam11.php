<?php
$n = 24;
$m = 6;
$sum = 0;
for ($i = 1; $i <= $n; $i++) {
    if ($m <= $n) {
        $sum = $n - $m;
        $n = $sum;
        $qoldiq = $i;
    }
}
echo "qoldiq " . $sum . "\n";
echo "butun qisim " . $qoldiq;

