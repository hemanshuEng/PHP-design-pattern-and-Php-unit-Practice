<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 13:21
 */

declare(strict_types=1);

use App\Patterns\Structural\Bridge\HelloWorldService;
use App\Patterns\Structural\Bridge\HtmlFormatter;
use App\Patterns\Structural\Bridge\PlainTextFormatter;


class BridgeTest extends TestCase
{
    public function testCanPrintUsingThePlainTextFormatter()
    {
        $service = new HelloWorldService(new PlainTextFormatter());

        $this->assertSame('Hello World', $service->get());
    }

    public function testCanPrintUsingTheHtmlFormatter()
    {
        $service = new HelloWorldService(new HtmlFormatter());

        $this->assertSame('<p>Hello World</p>', $service->get());
    }
}
