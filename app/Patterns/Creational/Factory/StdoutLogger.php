<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 18:02
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Factory;

class StdoutLogger implements Logger
{
    public function log(string $message)
    {
        echo $message;
    }
}
