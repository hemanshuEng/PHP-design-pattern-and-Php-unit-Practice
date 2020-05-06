<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 06/05/2020
 * Time: 16:50
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Iterator;

class Book
{
    private string $author;
    private string $title;

    public function __construct(string $title, string $author)
    {
         $this->author = $author;
         $this->title = $title;
    }

    public function getAuthor(): string
    {
        return $this->author;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getAuthorAndTitle(): string
    {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }

}
