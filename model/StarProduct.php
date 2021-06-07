<?php


class StarProduct
{
    private $product;
    private $avgRating;
    private $quantity;

    public function __construct(){}

    public function getProduct()
    {
        return $this->product;
    }

    public function setProduct($product)
    {
        $this->product = $product;
    }

    public function getAvgRating()
    {
        return $this->avgRating;
    }

    public function setAvgRating($avgRating)
    {
        $this->avgRating = $avgRating;
    }

    public function getQuantity()
    {
        return $this->quantity;
    }

    public function setQuantity($quantity): void
    {
        $this->quantity = $quantity;
    }
}