<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 20:40
 */

declare(strict_types=1);

use App\Patterns\Creational\Prototype\BarBookPrototype;
use App\Patterns\Creational\Prototype\FooBookPrototype;

class PrototypeTest extends TestCase
{
    public function testCaseGetFooBook()
    {
        $fooPrototype = new FooBookPrototype();
        $borPrototype = new BarBookPrototype();

        for ($i = 0; $i < 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No' . $i);
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 0; $i < 10; $i++) {
            $book = clone $borPrototype;
            $book->setTitle('Bar Book No' . $i);
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }
    }
}
