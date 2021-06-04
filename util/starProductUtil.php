<?php
require_once(__SITE_PATH . "/service/SalesService.php");

function getStarProducts($products)
{
    $starProducts = [];
    foreach ($products as $product) $starProducts[] = getStarProduct($product);
    return $starProducts;
}

function getStarProduct($product)
{
    $totalRating = 0;
    $numOfRatings = 0;
    $sales = SalesService::getSalesForProduct($product->getId());
    foreach ($sales as $sale){
        $rating = $sale->getRating();
        if ($rating !== null){
            $numOfRatings++;
            $totalRating += $rating;
        }
    }
    $avgRating = $numOfRatings !== 0 ? round(($totalRating / $numOfRatings) * 2) / 2 : 0;
    $starProduct = new StarProduct();
    $starProduct->setProduct($product);
    $starProduct->setAvgRating($avgRating);
    return $starProduct;
}