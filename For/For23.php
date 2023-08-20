<?php
$n = 10;
$fk = 0;
$f = 1;
$f1 = 1;

for ($i = 2; $i < $n; $i++) {
    $fk = $f + $f1;//5
    $f = $f1;//2
    $f1 = $fk;//3
    echo $fk . "\n";
}
