<?php

require __DIR__ . '/../../../src/Gold/Entity/Book.php';

use PHPUnit\Framework\TestCase;
use Gold\Entity\Book;



class BookTest extends TestCase
{
    public function testAuthorProperty()
    {
        $book = new Book();
        $expected = 'Steve Rayner';
        $book->setAuthor($expected);
        
        $this->assertEquals($expected, $book->getAuthor());
    }
}