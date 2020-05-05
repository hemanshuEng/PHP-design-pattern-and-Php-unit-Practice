<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 16:04
 */

declare(strict_types=1);

namespace App\Patterns\Behavioral\Command;

class HelloCommand implements Command
{
    private Receiver $output;
    public function __construct(Receiver $console)
    {
        $this->output = $console;
    }

    public function execute()
    {
        $this->output->write('Hello World');
    }
}
