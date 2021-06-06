<?php
require_once __SITE_PATH . '/util/starProductUtil.php';
require_once __SITE_PATH . '/util/reviewUtil.php';
require_once __SITE_PATH . '/service/ProductService.php';
require_once __SITE_PATH . '/service/SalesService.php';

class searchController extends BaseController
{
    function index()
    {
        $this->registry->template->starProducts = $_SESSION["starProducts"] ?? null;
        $_SESSION["starProducts"] = null;
        $this->registry->template->show("search");
    }

    function processSearch()
    {
        $searchTerm = $_POST["search"] ?? null;
        $products = ProductService::getProductsLike($searchTerm);
        $starProducts = getStarProducts($products);
        $_SESSION["starProducts"] = $starProducts;
        header('Location: ' . __SITE_URL . '/index.php?rt=search');
    }

    function searchDetails()
    {
        $productId = $_POST['productId'] ?? null;

        if (!$productId || !preg_match('/^product_[a-zA-Z0-9]+$/', $productId)) {
            exit();
        }

        $userId = $_SESSION["user"]->getId();
        $productId = substr($productId, 8);
        $product = ProductService::getProductById($productId);
        $sales = SalesService::getSalesForProduct($productId);

        $this->registry->template->reviews = getReviewsForProduct($sales);
//        echo "<pre>";
//        print_r($_SESSION["user"]);
//        echo "</pre>";
//        echo "Product: " . $product->getUserId() . " User: " . $userId;
        $this->registry->template->canBuy = !($product->getUserId() === $userId);
        $this->registry->template->starProduct = getStarProduct($product);
        $this->registry->template->numOfSoldProducts = sizeof($sales);
        $this->registry->template->show("product");
    }
}