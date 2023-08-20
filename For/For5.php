<?php
$kon = 10000.0;

for ($i = 0.1; $i <= 1.0; $i += 0.1) {
    if ($i <= 0.9) {
        echo $i . " gr kon = " . ($kon * $i) . "\n";
    } else {
        echo $i . " kg kon = " . ($kon * $i) . "\n";
    }
}