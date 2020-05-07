<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 06/05/2020
 * Time: 20:32
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Mediator;

class Ui extends Colleague
{
    public function outputUserInfo(string $username)
    {
        echo $this->mediator->getUser($username);
    }
}
