<?php

use App\Patterns\Creational\Singleton\Singleton;

class SingletonTest extends TestCase
{
    public function testUniqueness()
        {
            $firstCall = Singleton::getInstance();
            $secondCall = Singleton::getInstance();

            $this->assertInstanceOf(Singleton::class, $firstCall);
            $this->assertSame($firstCall, $secondCall);
        }
}
