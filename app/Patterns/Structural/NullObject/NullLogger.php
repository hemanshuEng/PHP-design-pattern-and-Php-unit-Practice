<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 07/05/2020
 * Time: 21:28
 */

declare(strict_types=1);

namespace App\Patterns\Structural\NullObject;

class NullLogger implements Logger
{
    public function log(string $str)
    {
    }
}
