<?php

declare(strict_types=1);

namespace App\Patterns\Creational\AbstractFactory;

/**
 * Interface JsonWriter
 *
 * @package App\Patterns\Creational\AbstractFactory
 */
interface JsonWriter
{
    /**
     * @param  array $data
     * @param  bool  $formatted
     * @return string
     */
    public function write(array $data, bool $formatted): string;
}
