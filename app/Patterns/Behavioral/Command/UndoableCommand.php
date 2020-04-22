<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 16:02
 */

declare(strict_types=1);

namespace App\Patterns\Behavioral\Command;

interface UndoableCommand extends Command
{
    public function undo();
}
