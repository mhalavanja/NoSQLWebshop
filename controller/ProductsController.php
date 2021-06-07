<?php
require_once __SITE_PATH . '/util/starProductUtil.php';
require_once __SITE_PATH . '/util/reviewUtil.php';
require_once __SITE_PATH . '/service/ProductService.php';
require_once __SITE_PATH . '/service/UserService.php';
require_once __SITE_PATH . '/service/SalesService.php';


class productsController extends BaseController
{
    function index()
    {
        $user = $_SESSION["user"];
//        echo '<pre>';
//        print_r($user);
//        echo '</pre>';
//        echo '<br>';
        $products = $user->getProductArray();
        $this->registry->template->user = $user;
        $this->registry->template->starProducts = getStarProducts($products);
        $this->registry->template->show("my-products");
    }

    function product()
    {
        $userId = $_SESSION["user"]->getId();
        $productId = null;
        if (isset($_POST['productId'])) $productId = $_POST['productId'];
        elseif (isset($_SESSION['productId'])) {
            $productId = $_SESSION['productId'];
            $_SESSION['productId'] = null;
        }

        if (!$productId || !preg_match('/^product_[0-9a-zA-Z]+$/', $productId)) {
            exit();
        }

        $productId = substr($productId, 8);
//        echo $productId . "<br>";
        $product = ProductService::getProductById($productId);
//        echo $product === null;
        $sales = SalesService::getSalesForProduct($productId);
        $saleId = getSaleIdForUserIfTheyCanReview($userId, $sales);
//        echo "<pre>";
//        print_r($sales);
//        echo "</pre>";
//        echo $saleId;
        $this->registry->template->canReview = (bool)$saleId;
        $this->registry->template->reviews = getReviewsForProduct($sales);
        $this->registry->template->saleId = $saleId;
        $this->registry->template->starProduct = getStarProduct($product);
        $this->registry->template->numOfSoldProducts = sizeof($sales);
        $this->registry->template->show("product");
    }

    function newProduct()
    {
        $this->registry->template->show("new-product");
    }

    function processNewProduct()
    {
        if (!isset($_POST['name']) || !isset($_POST['description']) || !isset($_POST['category']) || !isset($_POST['price']) ||
            empty($_POST['name']) || empty($_POST['description']) || empty($_POST['category']) || empty($_POST['price'])) {
            $this->registry->template->error = true;
            $this->registry->template->show("new-product");
            return;
        }
        $userId = $_SESSION["user"]->getId();
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setDescription($_POST['description']);
        $product->setPrice($_POST['price']);
        $product->setCategory($_POST['category']);
        ProductService::saveProduct($userId, $product);
        $_SESSION["user"]->setProductArray(ProductService::getProductsForUser($userId));
        header('Location: ' . __SITE_URL . '/index.php?rt=products/index');
    }

    function shoppingHistory()
    {
        $sales = $_SESSION["user"]->getSaleArray();
        if($sales){
            $products = [];
            foreach ($sales as $sale) {
                $product = ProductService::getProductById($sale->getProductId());
                $products[] = $product;
            }
            $this->registry->template->starProducts = getStarProducts($products);
        }
        $this->registry->template->show("shopping-history");
    }

    function processReview()
    {
        $rating = $_POST["rating"] ?? null;
        $comment = $_POST["comment"] ?? null;
        $sale = new Sale();
        $sale->setUserId($_SESSION["user"]->getId());
        $sale->setId($_POST["saleId"]);
        $sale->setProductId($_POST["productId"]);
        $sale->setRating($rating);
        $sale->setComment($comment);
        $_SESSION["productId"] = "product_" . $_POST["productId"];
        SalesService::setFeedback($sale);
        $_SESSION["user"]->setSaleArray(SalesService::getSalesForUser($_SESSION["user"]->getId()));
        header('Location: ' . __SITE_URL . '/index.php?rt=products/product');
    }

    function processBuy()
    {
        $productId = $_POST["productId"] ?? null;
        $userId = $_SESSION["user"]->getId();
        if (!$userId) header('Location: ' . __SITE_URL . '/index.php');
        if (!$productId) exit();
        $product = ProductService::getProductById($productId);
        $sale = new Sale();
        $sale->setProductId($productId);
        $sale->setUserId($userId);
        $sale->setName($product->getName());
        $sale->setDescription($product->getDescription());
        $sale->setCategory($product->getCategory());
        $sale->setPrice($product->getPrice());
        $sale->setQuantity($_POST["quantity"]);
        SalesService::saveSale($sale);
        $_SESSION["user"]->setSaleArray(SalesService::getSalesForUser($userId));
        header('Location: ' . __SITE_URL . '/index.php?rt=search');
    }
}