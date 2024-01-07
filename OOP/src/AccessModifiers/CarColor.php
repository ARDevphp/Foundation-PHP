<?php
declare(strict_types=1);

namespace src\AccessModifiers;

class CarColor
{
    private string $color;
    private array $allColor = ['black', 'green', 'white', 'red', 'lime'];

    public function getColor(): string
    {
        if (isset($this->color)) {
            return $this->color;
        } else {
            return 'No color selected';
        }
    }
    public function setColor(string $color): void
    {
        $color = strtolower($color);

        if (in_array($color, $this->allColor)) {
            $this->color = $color;
        }
    }
}

$car = new CarColor();
$car->setColor('white');
echo $car->getColor();