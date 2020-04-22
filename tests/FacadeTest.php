<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 22/04/2020
 * Time: 14:43
 */

declare(strict_types=1);

use App\Patterns\Structural\Facade\Bios;
use App\Patterns\Structural\Facade\Facade;
use App\Patterns\Structural\Facade\OperatingSystem;

class FacadeTest extends TestCase
{
    public function testComputerOn()
    {
        $os = $this->createMock(OperatingSystem::class);

        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->with($os);

        $facade = new Facade($bios, $os);
        $facade->turnOn();
        $this->assertSame('Linux', $os->getName());
    }

}
