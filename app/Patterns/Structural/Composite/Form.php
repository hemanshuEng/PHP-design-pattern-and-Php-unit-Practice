<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 18/04/2020
 * Time: 16:23
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Composite;

class Form implements Renderable
{
    /**
     * @var Renderable[]
     */
    private array $elements;

    public function render(): string
    {
        $formCode = '<form>';
        foreach ($this->elements as $element) {
            $formCode .= $element->render();
        }
        $formCode .= '</form>';
        return $formCode;
    }

    public function addElement(Renderable $element)
    {
        $this->elements[] = $element;
    }
}
