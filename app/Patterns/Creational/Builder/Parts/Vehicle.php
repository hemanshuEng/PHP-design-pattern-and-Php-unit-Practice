<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 15:14
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Builder\Parts;

class Vehicle
{
    /**
     * @var array
     */
    private array $data = [];

    /**
     * @param string $key
     * @param object $value
     */
    public function setParts(string $key, object $value)
    {
        $this->data[$key] = $value;
    }
}
