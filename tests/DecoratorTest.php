<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 19:08
 */

declare(strict_types=1);

use App\Patterns\Structural\Decorator\DoubleRoomBooking;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceBasicDoubleRoomBooking()
    {
        $booking = new DoubleRoomBooking();
        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame('double room', $booking->getDescription());
    }
}
