<?php
/**
 * A ni qiymati C ga
 * C ni qiymati B ga
 * B ni qiymati A ga
 */
$a = 6;
$b = 8;
$c = 3;
$d = $c;

$c = $a;
$a = $b;
$b = $d;

print "A -> C || C=" . $c . "\n";
print "C -> B || B=" . $b . "\n";
print "B -> A || A=" . $a;