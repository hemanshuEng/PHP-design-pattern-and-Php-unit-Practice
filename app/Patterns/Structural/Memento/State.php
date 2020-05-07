<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 07/05/2020
 * Time: 19:58
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Memento;

use http\Exception\InvalidArgumentException;

class State
{
    public const STATE_CREATED = 'created';
    public const STATE_OPENED = 'opened';
    public const STATE_ASSIGNED = 'assigned';
    public const STATE_CLOSED = 'closed';

    private string $state;

    private static array $validStates = [
        self::STATE_CREATED,
        self::STATE_OPENED,
        self::STATE_ASSIGNED,
        self::STATE_CLOSED
    ];

    public function __construct(string $state)
    {
        self::ensureIsValidState($state);
        $this->state = $state;
    }

    private static function ensureIsValidState(string $state)
    {
        if (!in_array($state, self::$validStates)) {
            throw new InvalidArgumentException('Invalid State Given');
        }
    }
    public function __toString()
    {
        return $this->state;
    }
}
