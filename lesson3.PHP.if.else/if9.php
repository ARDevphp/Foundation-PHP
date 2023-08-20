<?php
$sonA = 1;
$sonB = 3;
$sonC = $sonA;
if ($sonA > $sonB) {
    $sonA = $sonB;
    $sonB = $sonC;
    echo "A son kichik " . $sonA . "\n";
    echo "B son katta " . $sonB;
} else {
    echo "A son kichik " . $sonA . "\n";
    echo "B son katta " . $sonB;
}

