<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 18:40
 */

declare(strict_types=1);

use App\Patterns\Behavioral\Command\HelloCommand;
use App\Patterns\Behavioral\Command\Invoker;
use App\Patterns\Behavioral\Command\Receiver;

class CommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}
