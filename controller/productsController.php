<?php
require_once __SITE_PATH . '/model/' . 'User.php';


class productsController extends BaseController
{
    function index()
    {
        $user = $_SESSION["user"];
        $products = Product::where("id_user", $user->getId());
        $this->registry->template->user = $user;
        $this->registry->template->starProducts = $this->getAvgRatingForProducts($products);
        $this->registry->template->show("my-products");
    }

    function product()
    {
        $userId = $_SESSION["user"]->getId();
        $product_id = null;
        if (isset($_POST['product_id'])) $product_id = $_POST['product_id'];
        elseif (isset($_SESSION['product_id'])) {
            $product_id = $_SESSION['product_id'];
            $_SESSION['product_id'] = null;
        }

        if (!$product_id || !preg_match('/^product_[0-9]+$/', $product_id)) {
            exit();
        }

        $canReview = false;
        $saleId = null;
        $productId = substr($product_id, 8);
        $sales = Sale::where("id_product", $productId);
        $reviews = [];
        $totalRating = 0;
        $numOfRatings = 0;
        $numOfSoldProducts = sizeof($sales);

        foreach ($sales as $sale) {
            $review = [];
            $id = $sale->getId_user();
            $reviewer = User::find($id);
            $rating = $sale->getRating();
            $comment = $sale->getComment();

            $numOfSoldProducts += 1;
            if ($id === $userId &&
                $rating === null && $comment === null) {
                $canReview = true;
                $saleId = $sale->getId();
                continue;
            }
            if ($rating === null && $comment === null) continue;
            $totalRating += $rating;
            $numOfRatings += 1;

            $review["username"] = $reviewer->getUsername();
            $review["rating"] = $rating;
            $review["comment"] = $comment;
            $reviews[] = $review;
        }
        $avgRating = $numOfRatings !== 0 ? round(($totalRating / $numOfRatings) * 2) / 2 : 0;
        $this->registry->template->canReview = $canReview;
        $this->registry->template->reviews = $reviews;
        $this->registry->template->product = Product::find($productId);
        $this->registry->template->saleId = $saleId;
        $this->registry->template->avgRating = $avgRating;
        $this->registry->template->numOfSoldProducts = $numOfSoldProducts;
        $this->registry->template->show("product");
    }

    function newProduct()
    {
        $this->registry->template->show("new-product");
    }

    function processNewProduct()
    {
        if (!isset($_POST['name']) || !isset($_POST['description']) || !isset($_POST['price'])) {
            $this->registry->template->error = true;
            $this->registry->template->show("new-product");
        }
        $product = new Product();
        $product->setName($_POST['name']);
        $product->setDescription($_POST['description']);
        $product->setPrice($_POST['price']);
        $product->setId_user($_SESSION["user"]->getId());
        Product::save($product);
        header('Location: ' . __SITE_URL . '/index.php?rt=products');
    }

    function shoppingHistory()
    {
        $sales = Sale::where("id_user", $_SESSION["user"]->getId());
        $products = [];
        foreach ($sales as $sale) {
            $product = Product::find($sale->getId_product());
            $products[] = $product;
        }
        $this->registry->template->starProducts = $this->getAvgRatingForProducts($products);
        $this->registry->template->show("shopping-history");
    }

    function processReview()
    {
        $rating = isset($_POST["rating"]) ? $_POST["rating"] : null;
        $comment = isset($_POST["comment"]) ? $_POST["comment"] : null;
        $sale = new Sale();
        $sale->setId_user($_SESSION["user"]->getId());
        $sale->setId($_POST["saleId"]);
        $sale->setId_product($_POST["product_id"]);
        $sale->setRating($rating);
        $sale->setComment($comment);
        $_SESSION["product_id"] = "product_" . $_POST["product_id"];
        Sale::save($sale);
        header('Location: ' . __SITE_URL . '/index.php?rt=products/product');
    }

    function processBuy()
    {
        $productId = isset($_POST["productId"]) ? $_POST["productId"] : null;
        $userId = $_SESSION["user"]->getId();
        if (!$userId) header('Location: ' . __SITE_URL . '/index.php');
        if (!$productId) exit();
        $sale = new Sale();
        $sale->setId_product($productId);
        $sale->setId_user($userId);
        Sale::save($sale);
        header('Location: ' . __SITE_URL . '/index.php?rt=search');
    }
}