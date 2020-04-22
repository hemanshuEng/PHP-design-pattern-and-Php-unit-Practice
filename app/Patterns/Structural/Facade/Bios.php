<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 20/04/2020
 * Time: 16:29
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Facade;

interface Bios
{
    public function execute();

    public function waitForKeyPress();

    public function launch(OperatingSystem $os);

    public function powerDown();
}
