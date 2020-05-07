<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 06/05/2020
 * Time: 20:30
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Mediator;

interface Mediator
{
    public function getUser(string $username): string;
}
