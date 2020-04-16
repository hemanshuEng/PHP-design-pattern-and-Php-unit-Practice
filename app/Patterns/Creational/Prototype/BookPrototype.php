<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 16/04/2020
 * Time: 20:23
 */

declare(strict_types=1);

namespace App\Patterns\Creational\Prototype;

abstract class BookPrototype
{
    protected string $title;
    protected string $category;
    abstract public function __clone();
    public function getTitle(): string
    {
        return $this->title;
    }
    public function setTitle(string $title)
    {
        $this->title = $title;
    }
}
