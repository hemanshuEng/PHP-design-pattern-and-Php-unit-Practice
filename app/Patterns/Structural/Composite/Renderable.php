<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 16:06
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Composite;

interface Renderable
{
    public function render(): string;
}
