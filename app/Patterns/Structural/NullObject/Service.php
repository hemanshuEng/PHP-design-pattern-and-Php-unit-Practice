<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 07/05/2020
 * Time: 21:23
 */

declare(strict_types=1);

namespace App\Patterns\Structural\NullObject;


class Service
{
    private Logger $Logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function doSomething()
    {
        $this->logger->log('We are in '.__METHOD__);
    }
}
