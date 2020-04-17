<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 17/04/2020
 * Time: 16:15
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Adapter;

interface Book
{
    public function turnPage();

    public function open();

    public function getPage(): int;
}
