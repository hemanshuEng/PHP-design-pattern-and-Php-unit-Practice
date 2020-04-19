<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 19:00
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Decorator;

class BookingDecorator  implements Booking
{
    protected Booking $booking;

    public function __construct(Booking $booking)
    {
        $this->booking = $booking;
    }

    public function calculatePrice(): int
    {
    }

    public function getDescription(): string
    {
    }
}
