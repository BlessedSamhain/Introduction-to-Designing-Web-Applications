<?php

namespace models;

class Book
{
    private $id;
    private $author;
    private $title;
    private $publisher;
    private $isbn;
    private $isEbook;
    private $price;

    public function getId()
    {
        return $this->id;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author)
    {
        $this->author = $author;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getPublisher()
    {
        return $this->publisher;
    }

    public function setPublisher($publisher)
    {
        $this->publisher = $publisher;
    }

    public function getIsbn()
    {
        return $this->isbn;
    }

    public function setIsbn($isbn)
    {
        $this->isbn = $isbn;
    }

    public function getIsEbook()
    {
        return $this->isEbook;
    }

    public function setIsEbook($isEbook)
    {
        $this->isEbook = $isEbook;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function __construct($id, $author, $title, $publisher, $isbn, $isEbook, $price)
    {
        $this->id = $id;
        $this->author = $author;
        $this->title = $title;
        $this->publisher = $publisher;
        $this->isbn = $isbn;
        $this->isEbook = $isEbook;
        $this->price = $price;
    }
}
