<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 20/05/2020
 * Time: 20:22
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Observer;

use SplObserver;
use SplSubject;

class UserObserver implements SplObserver
{
    private array $changedUsers = [];

    public function update(SplSubject $subject)
    {
        $this->changedUsers[] = clone $subject;
    }

    public function getChangedUsers(): array
    {
        return $this->changedUsers;
    }
}
