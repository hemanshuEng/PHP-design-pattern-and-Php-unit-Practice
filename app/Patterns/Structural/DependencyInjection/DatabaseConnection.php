<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 19/04/2020
 * Time: 11:36
 */

declare(strict_types=1);

namespace App\Patterns\Structural\DependencyInjection;

class DatabaseConnection
{
    private DatabaseConfiguration $configuration;

    public function __construct(DatabaseConfiguration $config)
    {
        $this->configuration = $config;
    }

    public function getDsn(): string
    {
        return sprintf(
            '%s:%s@%s:%d',
            $this->configuration->getUsername(),
            $this->configuration->getPassword(),
            $this->configuration->getHost(),
            $this->configuration->getPort()
        );
    }
}
