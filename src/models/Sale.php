<?php

namespace models;
class Sale
{
    private $id;
    private $date;
    private $userId;
    private $price;

    private $books;

    public function getId()
    {
        return $this->id;
    }

    public function getDate()
    {
        return $this->date;
    }

    public function setDate($date)
    {
        $this->date = $date;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId)
    {
        $this->userId = $userId;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getBooks()
    {
        return $this->books;
    }

    public function setBooks($books)
    {
        $this->books = $books;
    }

    public function __construct($id, $date, $userId, $price, $books)
    {
        $this->id = $id;
        $this->date = $date;
        $this->userId = $userId;
        $this->price = $price;
        $this->books = $books;
    }
}
