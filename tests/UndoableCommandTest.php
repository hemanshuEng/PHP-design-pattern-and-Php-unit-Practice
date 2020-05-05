<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 18:50
 */

declare(strict_types=1);

use App\Patterns\Behavioral\Command\HelloCommand;
use App\Patterns\Behavioral\Command\Invoker;
use App\Patterns\Behavioral\Command\Receiver;

class UndoableCommandTest extends TestCase
{
    public function testInvocation()
    {
        $invoker = new Invoker();
        $receiver = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());

        $messageDateCommand = new \App\Patterns\Behavioral\Command\AddMessageDateCommand($receiver);
        $messageDateCommand->execute();
        $invoker->run();
        $this->assertsame("Hello World\nHello World[" . date('Y-m-d') . "]", $receiver->getOutput());
        $messageDateCommand->undo();

        $invoker->run();
        $this->assertsame("Hello World\nHello World[" . date('Y-m-d') . "]\nHello World", $receiver->getOutput());
    }
}
