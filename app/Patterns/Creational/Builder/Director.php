<?php

/**
 * Created by PhpStorm.
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 13:27
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Builder;

use App\Patterns\Creational\Builder\Parts\Vehicle;

class Director
{
    public function build(Builder $builder): Vehicle
    {
        $builder->createVehicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVehicle();
    }
}
