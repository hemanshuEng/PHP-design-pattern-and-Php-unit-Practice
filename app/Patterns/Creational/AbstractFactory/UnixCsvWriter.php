<?php

declare(strict_types=1);

namespace App\Patterns\Creational\AbstractFactory;

/**
 * Class UnixCsvWriter
 * @package App\Patterns\Creational\AbstractFactory
 */
class UnixCsvWriter implements CsvWriter
{
    /**
     * @inheritDoc
     */
    public function write(array $line): string
    {
        return join(',', $line) . "\n";
    }
}
