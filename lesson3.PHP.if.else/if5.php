<?php
$sun1 = 3;
$sun2 = -2;
$sun3 = 5;
$countMan = 0;
$countMus = 0;
if ($sun1 > 0) {
    $countMus++;
} else {
    $countMan++;
}
if ($sun2 > 0) {
    $countMus++;
} else {
    $countMan++;
}
if ($sun3 > 0) {
    $countMus++;
} else {
    $countMan++;
}
echo "musbat " . $countMus . "\n";
echo "manfiy " . $countMan;