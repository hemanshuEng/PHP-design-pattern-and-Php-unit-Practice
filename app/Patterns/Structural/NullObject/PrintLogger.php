<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 07/05/2020
 * Time: 21:27
 */

declare(strict_types=1);

namespace App\Patterns\Structural\NullObject;

class PrintLogger implements Logger
{

    public function log(string $str)
    {
        echo $str;
    }
}
