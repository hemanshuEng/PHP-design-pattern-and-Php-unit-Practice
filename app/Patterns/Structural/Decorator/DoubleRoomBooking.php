<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 19:03
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Decorator;

class DoubleRoomBooking implements Booking
{

    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}
