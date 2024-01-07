<?php
declare(strict_types=1);

namespace src\AccessModifiers;

class Car
{
    private string $name;
    private string $color;
    private int $year;

    protected function getName(): string
    {
        return $this->name;
    }

    protected function getColor(): string
    {
        return $this->color;
    }

    protected function getYear(): int
    {
        return $this->year;
    }

    protected function setName(string $name): void
    {
        $this->name = $name;
    }

    protected function setColor(string $color): void
    {
        $this->color = $color;
    }

    public function setYear(int $year): void
    {
        $this->year = $year;
    }
}

class Toyota extends Car
{
    private int $capacity;
    private int $speed;

    public function __construct(string $carName, string $carColor, int $carYear)
    {
        $this->setName($carName);
        $this->setColor($carColor);
        $this->setYear($carYear);

        return $this;
    }

    public function show()
    {
        echo "Name " . $this->getName();
        echo " Color " . $this->getColor();
        echo " Year " . $this->getYear();
    }

    public function getCapacity(): int
    {
        return $this->capacity;
    }

    public function setCapacity(int $capacity): void
    {
        $this->capacity = $capacity;
    }

    public function getSpeed(): int
    {
        return $this->speed;
    }

    public function setSpeed(int $speed): void
    {
        $this->speed = $speed;
    }
}

$toyota = new Toyota('Camry', 'black', 2022);
$toyota->setCapacity(50);
$toyota->setSpeed(280);

$toyota->show();
echo " " . $toyota->getCapacity() . PHP_EOL;
echo $toyota->getSpeed();
