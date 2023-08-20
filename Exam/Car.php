<?php


class Car
{
    public $petrol = 0;

    function addPetrol($litr): void
    {
        $this->petrol += $litr;
    }

    function drive(int $km): void
    {
        if ($this->petrol < 1) {
            print "Benzin yetmaydi";
        } else {
            $this->petrol -= $km;
        }
    }

    function showPetrol(): void
    {
        print $this->petrol;
    }
}

$car = new Car();
$car->addPetrol(10);
$car->drive(10);
$car->showPetrol();
