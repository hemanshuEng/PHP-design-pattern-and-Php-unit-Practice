<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 18:13
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Factory;

class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}
