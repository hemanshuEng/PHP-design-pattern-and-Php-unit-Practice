<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 18:29
 */

declare(strict_types=1);

namespace App\Patterns\Behavioral\Command;

class Receiver
{
    private array $output = [];
    private bool $enableDate = false;

    public function write(string $str)
    {
        if ($this->enableDate) {
            $str .= "[" . date('Y-m-d') . ']';
        }
        $this->output[] = $str;
    }

    public function getOutput(): string
    {
        return join("\n", $this->output);
    }

    public function enableDate()
    {
        $this->enableDate = true;
    }

    public function disableDate()
    {
        $this->enableDate = false;
    }
}
