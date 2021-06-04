<?php
require_once __SITE_PATH . '/util/starProductUtil.php';
require_once __SITE_PATH . '/util/reviewUtil.php';
require_once __SITE_PATH . '/service/ProductService.php';


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

        if (!$productId || !preg_match('/^product_[0-9]+$/', $productId)) {
            exit();
        }

        $productId = substr($productId, 8);
        $product = Product::find($productId);
        $sales = Sale::where("id_product", $productId);
        $saleId = getSaleIdForUserIfTheyCanReview($userId, $sales);

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
        if (!isset($_POST['name']) || !isset($_POST['description']) || !isset($_POST['price']) ||
            empty($_POST['name']) || empty($_POST['description']) || empty($_POST['price'])) {
            $this->registry->template->error = true;
            $this->registry->template->show("new-product");
            return;
        }
        $userId = $_SESSION["user"]->getId();
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setDescription($_POST['description']);
        $product->setPrice($_POST['price']);
        $product->set_userId($userId);
        ProductService::saveProduct($userId ,$product);
        header('Location: ' . __SITE_URL . '/index.php?rt=products/index');
    }

    function shoppingHistory()
    {
        $sales = Sale::where("id_user", $_SESSION["user"]->getId());
        $products = [];
        foreach ($sales as $sale) {
            $product = Product::find($sale->getId_product());
            $products[] = $product;
        }
        $this->registry->template->starProducts = getStarProducts($products);
        $this->registry->template->show("shopping-history");
    }

    function processReview()
    {
        $rating = $_POST["rating"] ?? null;
        $comment = $_POST["comment"] ?? null;
        $sale = new Sale();
        $sale->set_userId($_SESSION["user"]->getId());
        $sale->setId($_POST["saleId"]);
        $sale->set_productId($_POST["productId"]);
        $sale->setRating($rating);
        $sale->setComment($comment);
        $_SESSION["productId"] = "product_" . $_POST["productId"];
        Sale::save($sale);
        header('Location: ' . __SITE_URL . '/index.php?rt=products/product');
    }

    function processBuy()
    {
        $productId = $_POST["productId"] ?? null;
        $userId = $_SESSION["user"]->getId();
        if (!$userId) header('Location: ' . __SITE_URL . '/index.php');
        if (!$productId) exit();
        $sale = new Sale();
        $sale->set_productId($productId);
        $sale->set_userId($userId);
        Sale::save($sale);
        header('Location: ' . __SITE_URL . '/index.php?rt=search');
    }
}