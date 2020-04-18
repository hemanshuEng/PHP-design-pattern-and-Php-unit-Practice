<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 13:13
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Bridge;

class PlainTextFormatter implements Formatter
{

    public function format(string $text): string
    {
        return $text;
    }
}
