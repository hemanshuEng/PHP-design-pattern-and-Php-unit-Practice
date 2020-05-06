<?php

/**
 * User: Hemanshu Khodiyar
 * Date: 06/05/2020
 * Time: 16:57
 */

declare(strict_types=1);

namespace App\Patterns\Structural\Iterator;

use Countable;
use Iterator;

class BookList implements Countable, Iterator
{
    private array $books = [];
    private int $currentIndex = 0;
    public function addBook(Book $book)
    {
        $this->books[] = $book;
    }
    public function removeBook(Book $booToRemove)
    {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() == $booToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
        $this->books = array_values($this->books);
    }
    /**
     * @inheritDoc
     */
    public function count()
    {
        return count($this->books);
    }

    public function current()
    {
        return $this->books[$this->currentIndex];
    }

    public function next()
    {
        $this->currentIndex++;
    }

    public function key()
    {
        return $this->currentIndex;
    }

    public function valid(): bool
    {
        return isset($this->books[$this->currentIndex]);
    }

    public function rewind()
    {
        $this->currentIndex = 0;
    }
}
