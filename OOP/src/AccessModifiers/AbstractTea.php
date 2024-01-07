<?php
declare(strict_types=1);

namespace src\AccessModifiers;

use Cassandra\Function_;

abstract class AbstractTea
{
    private function hotWater(): void
    {
        echo "hot water added";
    }
    private function addSugar(): void
    {
        echo "added sugar";
    }
    private function milk(): void
    {
        echo "add milk";
    }
    private function addTea(): void
    {
        echo "add tea";
    }
    private function addCoffee(): void
    {
        echo "added coffee";
    }
    public function tea()
    {
    }
    public function coffee()
    {

    }
}