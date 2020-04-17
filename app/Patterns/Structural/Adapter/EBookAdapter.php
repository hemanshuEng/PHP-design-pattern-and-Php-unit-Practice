<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 17/04/2020
 * Time: 19:20
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Adapter;

class EBookAdapter implements Book
{
    protected Ebook $eBook;
    public function __construct(EBook $eBook)
    {
        $this->eBook = $eBook;
    }

    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }

    public function open()
    {
        $this->eBook->unlock();
    }
}
