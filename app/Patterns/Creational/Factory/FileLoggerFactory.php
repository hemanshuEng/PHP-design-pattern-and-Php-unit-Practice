<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 18:18
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Factory;

class FileLoggerFactory implements LoggerFactory
{
    private string $filePath;

    public function __construct(string $filePath)
    {
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}
