<?php
/**
 * 0 = Yakshanba
 * 1 = Dushanba
 * 2 = Seshanba
 * 3 = Chorshanba
 * 4 = Payshanba
 * 5 = Juma
 * 6 = Shanba
 * 1-Yanvar Payshanba
 */

$year = 10;
$day = $year % 7 + 3;
print $day;

