<?php
declare(strict_types=1);

namespace src\AccessModifiers;

class PrivateNumber
{
    private string $name = "Xavi";
    private int $number = 8;
    public function getName(): void
    {
        echo $this->name;
    }
    public function setName(string $name): string
    {
        return $this->name = $name;
    }

    public function getNumber(): void
    {
        echo " number " . $this->number . PHP_EOL;
    }
    public function setNumber(int $number): int
    {
        return $this->number = $number;
    }
}

$privateNumber = new PrivateNumber();

$privateNumber->getName();
$privateNumber->getNumber();

$privateNumber->setName('Inesta');
$privateNumber->setNumber(6);

$privateNumber->getName();
$privateNumber->getNumber();
