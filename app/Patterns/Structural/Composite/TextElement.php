<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 16:19
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Composite;

class TextElement implements Renderable
{
    private string $text;
    public function __construct(string $text)
    {
        $this->text = $text;
    }

    public function render(): string
    {
        return $this->text;
    }
}
