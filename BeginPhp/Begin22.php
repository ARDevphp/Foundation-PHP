<?php
$a = 13;
$b = 5;
print "A=" . $a . "\n";
print "B=" . $b . "\n";
$c = $a;
$a = $b;
$b = $c;
print "new A=" . $a . "\n";
print "new B=" . $b;
