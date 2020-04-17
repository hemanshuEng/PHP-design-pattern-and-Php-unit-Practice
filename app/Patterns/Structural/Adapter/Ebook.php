<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 17/04/2020
 * Time: 16:30
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Adapter;

interface Ebook
{
    public function unlock();

    public function pressNext();

    /**
     * @return int[]
     */
    public function getPage(): array;
}
