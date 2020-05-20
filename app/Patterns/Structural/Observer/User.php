<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 20/05/2020
 * Time: 19:17
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Observer;

use SplObserver;
use SplSubject;

class User implements SplSubject
{
    private string $email;
    private \SplObjectStorage $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer)
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer)
    {
        $this->observers->detach($observer);
    }
    public function changeEmail(string $email)
    {
        $this->email = $email;
        $this->notify();
    }
    /**
     * @inheritDoc
     */
    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}
