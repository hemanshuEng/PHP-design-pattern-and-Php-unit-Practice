<?php

declare(strict_types=1);

namespace App\Patterns\Creational\AbstractFactory;

/**
 * Class UnixJsonWriter
 *
 * @package App\Patterns\Creational\AbstractFactory
 */
class UnixJsonWriter implements JsonWriter
{
    /**
     * @inheritDoc
     */
    public function write(array $data, bool $formatted): string
    {
        $options = 0;
        if ($formatted) {
            $options = JSON_PRETTY_PRINT;
        }
        return json_encode($data, $options);
    }
}
