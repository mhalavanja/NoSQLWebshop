<?php


class Sale implements IteratorAggregate
{
    private $id;
    private $productId;
    private $userId;
    private $buyerId; //nije dio Sale objekta u bazi, nego je _id usera kojem pripada ovaj sale
    private $rating;
    private $comment;
    private $category;
    private $quantity;
    private $price;
    private $description;
    private $name;
    private $username; //nije dio Sale objekta u bazi, nego je username usera kojem pripada ovaj sale

    public function __construct(){}

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getProductId()
    {
        return $this->productId;
    }

    public function setProductId($productId): void
    {
        $this->productId = $productId;
    }

    public function getUserId()
    {
        return $this->userId;
    }

    public function setUserId($userId): void
    {
        $this->userId = $userId;
    }

    public function getBuyerId()
    {
        return $this->buyerId;
    }

    public function setBuyerId($buyerId): void
    {
        $this->buyerId = $buyerId;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getComment()
    {
        return $this->comment;
    }

    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category): void
    {
        $this->category = $category;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price): void
    {
        $this->price = $price;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name): void
    {
        $this->name = $name;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username): void
    {
        $this->username = $username;
    }

    public function getFieldsForSave()
    {
        return array(
            '_id' => $this->id,
            'userId' => $this->userId,
            'productId' => $this->productId,
            'name' => $this->name,
            'description' => $this->description,
            'category' => $this->category,
            'price' => $this->price,
            'comment' => $this->comment,
            'rating' => $this->rating,
            'quantity' => $this->quantity
        );
    }

    public function getFieldsForFeedbackSave()
    {
        return array(
            'saleArray.$.comment' => $this->comment,
            'saleArray.$.rating' => $this->rating
        );
    }

    public function getIterator()
    {
        return new ArrayIterator(array(
            '_id' => $this->id,
            'productId' => $this->productId,
            'userId' => $this->userId,
            'rating' => $this->rating,
            'comment' => $this->comment,
            'category' => $this->category,
            'quantity' => $this->quantity,
            'price' => $this->price,
            'description' => $this->description,
            'name' => $this->name
        ));
    }
}