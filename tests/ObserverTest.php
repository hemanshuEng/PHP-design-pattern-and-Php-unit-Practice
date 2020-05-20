<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 20/05/2020
 * Time: 20:27
 */

declare(strict_types=1);

use App\Patterns\Structural\Observer\User;
use App\Patterns\Structural\Observer\UserObserver;

class ObserverTest extends TestCase
{
    public function testChangedInUserLeadsToUserObserverBeingNotified()
    {
        $observer = new UserObserver();

        $user = new User();
        $user->attach($observer);

        $user->changeEmail('foo@bar.com');
        $this->assertCount(1, $observer->getChangedUsers());
    }
}
