<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 07/05/2020
 * Time: 20:27
 */

declare(strict_types=1);

use App\Patterns\Structural\Memento\State;
use App\Patterns\Structural\Memento\Ticket;

class MementoTest extends TestCase
{
    public function testOpenTicketAssignAndSetBackToOpen()
    {
        $ticket = new Ticket();
        $ticket->open();
        $openedState = $ticket->getState();
        $this->assertSame(State::STATE_OPENED, (string) $ticket->getState());
        $memento = $ticket->saveToMemento();

        $ticket->assign();
        $this->assertSame(State::STATE_ASSIGNED, (string) $ticket->getState());

        $ticket->restoreFromMemento($memento);
        $this->assertSame(State::STATE_OPENED, (string) $ticket->getState());
        $this->assertNotSame($openedState, $ticket->getState());
    }
}
