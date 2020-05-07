<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 06/05/2020
 * Time: 20:42
 */

declare(strict_types=1);

use App\Patterns\Structural\Mediator\Ui;
use App\Patterns\Structural\Mediator\UserRepository;
use App\Patterns\Structural\Mediator\UserRepositoryUiMediator;

class MediatorTest extends TestCase
{
    public function testOutput()
    {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());
        $this->expectOutputString('User: Dominik');
        $mediator->printInfoAbout('Dominik');
    }
}
