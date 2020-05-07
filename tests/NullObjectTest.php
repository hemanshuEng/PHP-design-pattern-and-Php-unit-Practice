<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 07/05/2020
 * Time: 21:34
 */

declare(strict_types=1);

use App\Patterns\Structural\NullObject\NullLogger;
use App\Patterns\Structural\NullObject\PrintLogger;
use App\Patterns\Structural\NullObject\Service;

class NullObjectTest extends TestCase
{
    public function testNullObject()
    {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }
    public function testStandardLogger()
    {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in App\Patterns\Structural\NullObject\Service::doSomething');
        $service->doSomething();
    }
}
