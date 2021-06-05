<?php


class Product implements IteratorAggregate
{
    private $id;
    private $userId;
    private $name;
    private $description;
    private $category;
    private $price;

    public function __construct(){}

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getIterator()
    {
        return new ArrayIterator(array(
            'id' => $this->id,
            'id_user' => $this->userId,
            'name' => $this->name,
            'description' => $this->description,
            'category' => $this->category,
            'price' => $this->price,
        ));
    }
}