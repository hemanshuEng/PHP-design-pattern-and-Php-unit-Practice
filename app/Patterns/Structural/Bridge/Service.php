<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 13:15
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Bridge;

abstract class Service
{
    protected Formatter $implementation;

    public function __construct(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    public function setImplementation(Formatter $printer)
    {
        $this->implementation = $printer;
    }

    abstract public function get(): string;
}
