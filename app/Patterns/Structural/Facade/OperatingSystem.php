<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 20/04/2020
 * Time: 16:18
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Facade;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}
