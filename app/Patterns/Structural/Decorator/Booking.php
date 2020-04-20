<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 18:59
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Decorator;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}
