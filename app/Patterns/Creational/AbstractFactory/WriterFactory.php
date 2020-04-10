<?php
declare(strict_types=1);

namespace App\Patterns\Creational\AbstractFactory;


interface WriterFactory
{
    /**
     * @return CsvWriter
     */
    public function createCsvWriter(): CsvWriter;

    /**
     * @return JsonWriter
     */
    public function createJsonWriter(): JsonWriter;
}
