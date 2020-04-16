<?php

declare(strict_types=1);

namespace App\Patterns\Creational\AbstractFactory;

/**
 * Class UnixWriterFactory
 *
 * @package App\Patterns\Creational\AbstractFactory
 */
class UnixWriterFactory implements WriterFactory
{

    /**
     * @inheritDoc
     */
    public function createCsvWriter(): CsvWriter
    {
        return new UnixCsvWriter();
    }

    /**
     * @inheritDoc
     */
    public function createJsonWriter(): JsonWriter
    {
        return new UnixJsonWriter();
    }
}
