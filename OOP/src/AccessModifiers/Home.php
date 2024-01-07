<?php
declare(strict_types=1);

namespace src\AccessModifiers;

class Home
{
    private string $color;
    private int $room;

    public function __construct(string $color, int $room)
    {
        $this->color = $color;
        $this->room = $room;
    }
    public function homeAdd(): void
    {
        if (isset($this->color) && isset($this->room)) {
            echo "the house was built";
            echo "color " . $this->color;
            echo "room " . $this->room . PHP_EOL;
        }
        else {
            echo "tell me what the house will be like";
        }
    }
}

$home = new Home('red', 4);
$home->homeAdd();
