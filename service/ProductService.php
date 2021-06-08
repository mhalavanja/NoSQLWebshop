<?php

use MongoDB\Driver\Query;

require_once __SITE_PATH . '/app/database/mongodb.class.php';
require_once __SITE_PATH . '/service/SalesService.php';


class ProductService
{
    static function saveProduct($userId, $product)
    {
        $mongo = mongoDB::getConnection();
        $bulk = new MongoDB\Driver\BulkWrite;
        $product->setId(new MongoDB\BSON\ObjectId);
        $filter = ["_id" => new MongoDB\BSON\ObjectId($userId)];
        $newObj = ['$addToSet' => ['productArray' => $product->getFieldsForSave()]];

        $bulk->update($filter, $newObj);
        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
        return $result;
    }

    static function getProductsForUser($userId)
    {
        $manager = mongoDB::getConnection();

        $filter = [
            '_id' => new MongoDB\BSON\ObjectId($userId)
        ];
        $options = [
            'projection' => [
                'productArray' => true,
                '_id' => false
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $productArray = [];
        foreach ($rows as $row) {
            $row = json_decode(json_encode($row), true);
            foreach ($row["productArray"] as $document) $productArray[] = mongoToClass($document, new Product(), false);
        }
        return $productArray;
    }

    static function getProductsLike($likeTerm)
    {
        $manager = mongoDB::getConnection();
        $filter = [
            'productArray.name' => ['$regex' => '(?i)' . $likeTerm]
        ];
        $options = [
            'projection' => [
                'productArray' => [
                    '$elemMatch' => [
                        'name' => [
                            '$regex' => '(?i)' . $likeTerm
                        ]
                    ]
                ]
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $products = [];
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
            $product = mongoToClass($document, new Product(), true);
            $product->setUserId($document["_id"]["\$oid"]);
            $products[] = $product;

        }
        return $products;
    }

    static function getProductById($productId)
    {
        $manager = mongoDB::getConnection();
        $id = new MongoDB\BSON\ObjectId($productId);

        $filter = [
            'productArray._id' => $id
        ];
        $options = [
            'projection' => [
                '_id' => true,
                'productArray' => [
                    '$elemMatch' => [
                        '_id' => $id
                    ]
                ]
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $product = null;
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
            $product = mongoToClass($document, new Product(), true);
            $product->setUserId($document["_id"]["\$oid"]);
        }
        return $product;
    }
}