<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 17/04/2020
 * Time: 16:18
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Adapter;

class PaperBook implements Book
{
    private int $page;

    public function turnPage()
    {
        $this->page++;
    }

    public function open()
    {
        $this->page = 1;
    }

    public function getPage(): int
    {
        return $this->page;
    }
}
