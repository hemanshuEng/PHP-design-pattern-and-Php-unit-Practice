<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 13:18
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Bridge;

class HelloWorldService extends Service
{

    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}
