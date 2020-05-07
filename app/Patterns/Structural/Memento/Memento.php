<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 07/05/2020
 * Time: 19:56
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Memento;

class Memento
{
    private State $state;

    public function __construct(State $stateToSave)
    {
        $this->state = $stateToSave;
    }

    public function getState()
    {
        return $this->state;
    }
}
