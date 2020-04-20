<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 19:04
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Decorator;

class ExtraBed extends BookingDecorator
{
    private const PRICE = 30;

    public function calculatePrice(): int
    {
        return $this->booking->calculatePrice() + self::PRICE;
    }

    public function getDescription(): string
    {
        return $this->booking->getDescription() . 'with Extra Bed';
    }
}
