<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 17/04/2020
 * Time: 19:44
 */

declare(strict_types=1);

use App\Patterns\Structural\Adapter\PaperBook;

class AdapterTest extends TestCase
{
    public function testCanTurnPageOnBook()
    {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();
        $this->assertSame(2, $book->getPage());
    }
    public function testCanTurnPageOnKindleLikeANormalBook()
    {
        $book = new \App\Patterns\Structural\Adapter\EBookAdapter(new \App\Patterns\Structural\Adapter\Kindle());
        $book->open();
        $book->turnPage();
        $this->assertSame(2, $book->getPage());
    }
}
