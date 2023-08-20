<?php
/**
 * 1 = Dushanba
 * 2 = Seshanba
 * 3 = Chorshanba
 * 4 = Payshanba
 * 5 = Juma
 * 6 = Shanba
 * 7 = Yakshanba
 * Agar 1-Yanvar Seshanba bo'lasa
 */

$year = 8;
$day = $year % 7 + 1;
print $day;
