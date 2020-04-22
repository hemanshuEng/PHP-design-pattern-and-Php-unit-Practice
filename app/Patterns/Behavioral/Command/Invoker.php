<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 18:37
 */

declare(strict_types=1);

namespace App\Patterns\Behavioral\Command;

class Invoker
{
    private Command $command;

    public function setCommand(Command $cmd)
    {
        $this->command = $cmd;
    }

    public function run()
    {
        $this->command->execute();
    }
}
