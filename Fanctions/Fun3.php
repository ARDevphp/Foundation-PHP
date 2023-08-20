<?php
function quarter(int $x, int $y)
{
    if ($x != 0 && $y != 0) {
        if ($x >= 1 && $y >= 1) {
            echo "chorak 1";
        } else if ($x <= -1 && $y >= 1) {
            echo "chorak 2";
        } else if ($x <= -1 && $y <= -1) {
            echo "chorak 3";
        } else if ($x >= 1 && $y <= -1) {
            echo "chorak 4";
        }
    } else {
        echo "X va Y 0 dan farqli bo'lsin";
    }
}

quarter(2, 4);//1
quarter(2, -4);//4
quarter(-2, 4);//2
quarter(2, 4);//1
quarter(-2, -4);//3
quarter(2, -4);//4
quarter(0, 0);//0