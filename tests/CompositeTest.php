<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 16:29
 */

declare(strict_types=1);

use App\Patterns\Structural\Composite\Form;
use App\Patterns\Structural\Composite\InputElement;
use App\Patterns\Structural\Composite\TextElement;

class CompositeTest extends TestCase
{
    public function testRender()
    {
        $form = new Form();
        $form->addElement(new TextElement('Email:'));
        $form->addElement(new InputElement());
        $embed = new Form();
        $embed->addElement(new TextElement('Password:'));
        $embed->addElement(new InputElement());
        $form->addElement($embed);
        $this->assertSame(
            '<form>Email:<input type="text" /><form>Password:<input type="text" /></form></form>',
            $form->render()
        );
    }
}
