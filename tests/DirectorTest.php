<?php
declare(strict_types=1);

use App\Patterns\Creational\Builder\CarBuilder;
use App\Patterns\Creational\Builder\Director;
use App\Patterns\Creational\Builder\Parts\Car;
use App\Patterns\Creational\Builder\Parts\Truck;
use App\Patterns\Creational\Builder\TruckBuilder;

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 16:34
 */
class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVehicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVehicle);
    }
    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVehicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVehicle);
    }
}
