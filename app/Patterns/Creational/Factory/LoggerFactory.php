<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 18:08
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Factory;

interface LoggerFactory
{
    public function createLogger(): Logger;
}
