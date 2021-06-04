<?php
require_once __SITE_PATH . '/app/database/mongodb.class.php';


class ProductService
{
    static function saveProduct($userId, $product)
    {
        $bulk = new MongoDB\Driver\BulkWrite;
        $product->setId(new MongoDB\BSON\ObjectId);

        $filter = ["_id" => $userId];
        $newObj = ['$addToSet' => ['products_owned' => $product->getIterator()]];
        $bulk->update($filter, $newObj);
        $mongo = mongoDB::getConnection();

        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
    }

//    static function getProductsForUser($userId)
//    {
//
//    }

    static function getProductsLike($likeTerm)
    {

    }

    static function getProduct($productId)
    {

    }

//    static function getShoppingHistoryForUser($userId)
//    {
//
//    }
}