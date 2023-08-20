<?php
$day = 3;
$month = 12;
if ($day < 0 || $day > 31) {
    echo "no dey";
} else if ($month < 0 || $month > 12) {
    echo "no month";
} else {
    switch ($month) {
        case 1 :
        {
            if ($day >= 1 && $day < 31) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 02;
            }
            break;
        }
        case 2 :
        {
            if ($day >= 1 && $day < 28) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 03;
            }
            break;
        }
        case 3 :
        {
            if ($day >= 1 && $day < 30) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 4;
            }
            break;
        }
        case 4 :
        {
            if ($day >= 1 && $day < 30) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 5;
            }
            break;
        }
        case 5 :
        {
            if ($day >= 1 && $day < 31) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 6;
            }
            break;
        }
        case 6 :
        {
            if ($day >= 1 && $day < 30) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 7;
            }
            break;
        }
        case 7 :
        {
            if ($day >= 1 && $day < 31) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 8;
            }
            break;
        }
        case 8 :
        {
            if ($day >= 1 && $day < 31) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 9;
            }
            break;
        }
        case 9 :
        {
            if ($day >= 1 && $day < 30) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 10;
            }
            break;
        }
        case 10 :
        {
            if ($day >= 1 && $day < 31) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 11;
            }
            break;
        }
        case 11 :
        {
            if ($day >= 1 && $day < 30) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 12;
            }
            break;
        }
        case 12 :
        {
            if ($day >= 1 && $day < 31) {
                $day++;
                echo $day . " " . $month;
            } else {
                echo 1 . " " . 1;
            }
            break;
        }
    }
}