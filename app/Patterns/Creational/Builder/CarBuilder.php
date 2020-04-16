<?php
declare(strict_types=1);
/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 15:57
 */

namespace App\Patterns\Creational\Builder;


use App\Patterns\Creational\Builder\Parts\Car;
use App\Patterns\Creational\Builder\Parts\Door;
use App\Patterns\Creational\Builder\Parts\Engine;
use App\Patterns\Creational\Builder\Parts\Vehicle;
use App\Patterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{
    private Car $car;

    public function createVehicle()
    {
        $this->car = new Car();
    }

    public function addWheel()
    {
        $this->car->setParts('wheelLF', new Wheel());
        $this->car->setParts('wheelRF', new Wheel());
        $this->car->setParts('wheelLR', new Wheel());
        $this->car->setParts('wheelRR', new Wheel());
    }

    public function addEngine()
    {
        $this->car->setParts('engine', new Engine());
    }

    public function addDoors()
    {
        $this->car->setParts('rightDoor', new Door());
        $this->car->setParts('leftDoor', new Door());
        $this->car->setParts('trunkLid', new Door());
    }

    public function getVehicle(): Vehicle
    {
        return $this->car;
    }
}
