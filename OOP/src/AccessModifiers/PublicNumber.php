<?php

declare(strict_types=1);

namespace src\AccessModifiers;

class PublicNumber
{
    public string $name = 'Jon';
    public int $age = 32;

    public function show(): void
    {
        echo $this->name . PHP_EOL;
        echo $this->age . PHP_EOL;
    }
}

$publicNumber = new PublicNumber();

$publicNumber->show();

$publicNumber->name = 'Maks';
$publicNumber->age = 54;

$publicNumber->show();

