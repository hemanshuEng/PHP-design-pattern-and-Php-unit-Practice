<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 06/05/2020
 * Time: 20:31
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Mediator;

abstract class Colleague
{
    protected Mediator $mediator;

    public function setMediator(Mediator $mediator)
    {
        $this->mediator = $mediator;
    }
}
