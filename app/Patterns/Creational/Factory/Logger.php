<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 18:00
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Factory;

interface Logger
{
    public function log(string $message);
}
