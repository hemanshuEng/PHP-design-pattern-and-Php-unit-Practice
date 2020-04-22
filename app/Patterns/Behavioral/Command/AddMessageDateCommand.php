<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 18:26
 */

declare(strict_types=1);

namespace App\Patterns\Behavioral\Command;

class AddMessageDateCommand implements UndoableCommand
{
    private Receiver $output;

    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->enableDate();
    }

    public function undo()
    {
        $this->output->disableDate();
    }
}
