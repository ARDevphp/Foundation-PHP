<?php
/**
 * A ni qiymati B ga
 * B ni qiymati C ga
 * C ni qiymati A ga
 */
$a = 5;
$b = 8;
$c = 10;
$s = $b;

$b = $a;
$a = $c;
$c = $s;

print $a . "\n";
print $b . "\n";
print $c;
