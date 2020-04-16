<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 20:39
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    protected string $category = 'Foo';
    public function __clone()
    {
    }
}
