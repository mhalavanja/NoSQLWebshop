<?php
require_once(__SITE_PATH . "/service/SalesService.php");

function getStarProducts($products)
{
    if (!$products) return null;
    $starProducts = [];
    foreach ($products as $product) $starProducts[] = getStarProduct($product);
    return $starProducts;
}

function getStarProduct($product)
{
    $totalRating = 0;
    $numOfRatings = 0;
    $id = method_exists($product, "getProductId") ? $product->getProductId() : $product->getId();
    $sales = SalesService::getSalesForProduct($id);
    $starProduct = new StarProduct();
    foreach ($sales as $sale) {
        $rating = $sale->getRating();
        if ($rating !== null) {
            $numOfRatings++;
            $totalRating += $rating;
        }
        if ($_SESSION['user']->getId() === $sale->getBuyerId())
            $starProduct->setQuantity($sale->getQuantity());
    }
    $avgRating = $numOfRatings !== 0 ? round(($totalRating / $numOfRatings) * 2) / 2 : 0;
    $starProduct->setProduct($product);
    $starProduct->setAvgRating($avgRating);
    return $starProduct;
}