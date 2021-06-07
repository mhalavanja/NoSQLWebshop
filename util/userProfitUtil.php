<?php
require_once(__SITE_PATH . "/service/SalesService.php");

function getUserIncome()
{
    $products = $_SESSION['user']->getProductArray();
    $income = 0;

    foreach ($products as $product) {
        $id = method_exists($product, "getProductId") ? $product->getProductId() : $product->getId();
        $sales = SalesService::getSalesForProduct($id);
        foreach ($sales as $sale) {
                $income += $sale->getQuantity() * $sale->getPrice();
        }
    }
    return $income;
}

function getUserOutcome()
{
    $sales = $_SESSION['user']->getSaleArray();
    $outcome = 0;
    foreach ($sales as $sale) {
        $outcome += $sale->getQuantity() * $sale->getPrice();
    }
    return $outcome;
}
