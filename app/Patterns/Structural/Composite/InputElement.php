<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 16:11
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Composite;

class InputElement implements Renderable
{
    public function render(): string
    {
        return '<input type="text" />';
    }
}
