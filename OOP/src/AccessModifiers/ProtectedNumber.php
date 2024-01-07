<?php
declare(strict_types=1);

namespace src\AccessModifiers;

class ProtectedNumber
{
    protected string $name = "Leo Meesi";
    protected int $age = 33;
}

class ProtectedNumberOne extends ProtectedNumber
{
    public function show(): void
    {
        echo $this->name;
        echo " age " . $this->age . PHP_EOL;
    }
    public function setName(string $name): string
    {
        return $this->name = $name;
    }
    public function setAge(int $age): int
    {
        return $this->age = $age;
    }
}

$ProtectedNumberOne = new ProtectedNumberOne();

$ProtectedNumberOne->show();

$ProtectedNumberOne->setName('Jon Terry');
$ProtectedNumberOne->setAge(42);

$ProtectedNumberOne->show();
