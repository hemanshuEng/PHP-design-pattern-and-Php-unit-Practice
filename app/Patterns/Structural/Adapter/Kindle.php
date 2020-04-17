<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 17/04/2020
 * Time: 19:36
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Adapter;

class Kindle implements Ebook
{
    private int $page = 1;
    private int $totalPages = 100;
    public function unlock()
    {
    }

    public function pressNext()
    {
        $this->page++;
    }

    /**
     * @inheritDoc
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }
}
