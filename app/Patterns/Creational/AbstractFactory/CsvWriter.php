<?php
declare(strict_types=1);

namespace App\Patterns\Creational\AbstractFactory;


interface CsvWriter
{
    /**
     * @param array $line
     * @return string
     */
    public function write(array $line): string;
}
