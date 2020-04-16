<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 15:28
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Parts\Door;
use App\Patterns\Creational\Builder\Parts\Engine;
use App\Patterns\Creational\Builder\Parts\Truck;
use App\Patterns\Creational\Builder\Parts\Vehicle;
use App\Patterns\Creational\Builder\Parts\Wheel;

/**
 * Class TruckBuilder
 *
 * @package App\Patterns\Creational\Builder
 */
class TruckBuilder implements Builder
{
    /**
     * @var Truck
     */
    private Truck $truck;

    /**
     *
     */
    public function createVehicle()
    {
        $this->truck = new Truck();
    }

    /**
     *
     */
    public function addWheel()
    {
        $this->truck->setParts('wheel1', new Wheel());
        $this->truck->setParts('wheel2', new Wheel());
        $this->truck->setParts('wheel3', new Wheel());
        $this->truck->setParts('wheel4', new Wheel());
        $this->truck->setParts('wheel5', new Wheel());
        $this->truck->setParts('wheel6', new Wheel());
    }

    /**
     *
     */
    public function addEngine()
    {
        $this->truck->setParts('truckEngine', new Engine());
    }

    /**
     *
     */
    public function addDoors()
    {
        $this->truck->setParts('rightDoor', new Door());
    }

    /**
     * @return Vehicle
     */
    public function getVehicle(): Vehicle
    {
        return $this->truck;
    }
}
