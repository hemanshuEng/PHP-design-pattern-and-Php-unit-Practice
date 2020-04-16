<?php
declare(strict_types=1);
/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 15:23
 */

namespace App\Patterns\Creational\Builder;


use App\Patterns\Creational\Builder\Parts\Vehicle;

interface Builder
{
    public function createVehicle();
    public function addWheel();
    public function addEngine();
    public function addDoors();
    public function getVehicle(): Vehicle;
}
