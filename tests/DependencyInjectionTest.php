<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 19/04/2020
 * Time: 11:44
 */

declare(strict_types=1);

use App\Patterns\Structural\DependencyInjection\DatabaseConfiguration;
use App\Patterns\Structural\DependencyInjection\DatabaseConnection;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection()
    {
        $config = new DatabaseConfiguration('localhost', 3306, 'username', 'password');
        $connection = new DatabaseConnection($config);
        $this->assertSame('username:password@localhost:3306', $connection->getDsn(), $connection->getDsn());
    }
}
