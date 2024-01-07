<?php

declare(strict_types=1);

class Bankomat
{
    private int $allMoney = 10000;

    function pulBer(int $sum):void
    {
        if ($this->allMoney >= $sum) {
            $this->allMoney -= $sum;
            print $this->allMoney . " ming qoldi \n";
        } else {
            print "Bankomatda yetarlicha mablag’ yo’q";
        }
    }
}

$foo = new Bankomat();
$foo->pulBer(4000);//Bankomatda 6000 ming qoldi
$foo->pulBer(2000);//Bankomatda 4000 ming qoldi
$foo->pulBer(2000);//Bankomatda 2000 ming qoldi
$foo->pulBer(3000);//Bankomatda yetarlicha mablag’ yo’q