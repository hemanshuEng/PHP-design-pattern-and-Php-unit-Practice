<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 19:06
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Decorator;

class WIFI extends BookingDecorator
{
    private const PRICE = 2;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->getDescription() . 'with wifi';
    }
}
