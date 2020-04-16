<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 18:23
 */

declare(strict_types=1);

use App\Patterns\Creational\Factory\FileLogger;
use App\Patterns\Creational\Factory\StdoutLogger;
use App\Patterns\Creational\Factory\StdoutLoggerFactory;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging()
    {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();
        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogging()
    {
        $loggerFactory = new \App\Patterns\Creational\Factory\FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}
