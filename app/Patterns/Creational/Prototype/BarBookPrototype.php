<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 20:32
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    protected string $category = 'Bar';
    public function __clone()
    {
    }
}
