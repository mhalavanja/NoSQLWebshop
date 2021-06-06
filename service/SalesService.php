<?php

use MongoDB\Driver\Query;

require_once __SITE_PATH . '/app/database/mongodb.class.php';
require_once __SITE_PATH . '/util/mongoToClassUtil.php';

class SalesService
{
    static function getSalesForProduct($productId)
    {
        $manager = mongoDB::getConnection();
        $id = new MongoDB\BSON\ObjectId($productId);
        $filter = [
            'saleArray.productId' => $id
        ];
        $options = [
            'projection' => [
                '_id' => true,
                'username' => true,
                'saleArray' => [
                    '$elemMatch' => [
                        'productId' => $id
                    ]
                ]
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $sales = [];
//        echo "<pre>";
//        print_r($rows);
//        echo "</pre>";
//        return;
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
//            echo "<pre>";
//            print_r($document);
//            print_r($document["_id"]["\$oid"]);
//            echo "</pre>";
//            echo $document["username"];
//            return;

            $sale = mongoToClass($document, new Sale(), true);
            $sale->setUsername($document["username"]);
            $sale->setBuyerId($document["_id"]["\$oid"]);
            $sales[] = $sale;
        }
        return $sales;
    }

    static function getSalesByUserId($userId)
    {
        $manager = mongoDB::getConnection();
        $id = new MongoDB\BSON\ObjectId("$userId");

        $filter = [
            'saleArray.userId' => $id
        ];
        $options = [
            'projection' => [
                'saleArray' => [
                    '$elemMatch' => [
                        'userId' => $id
                    ]
                ]
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $sales = [];
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
//            echo "<pre>";
//            print_r($document);
//            echo "</pre>";
            $sale = mongoToClass($document, new Sale(), true);
            $sales[] = $sale;
        }
        return $sales;
    }

    static function getSalesForUser($userId)
    {
        $manager = mongoDB::getConnection();
        $id = new MongoDB\BSON\ObjectId("$userId");

        $filter = [
            '_id' => $userId
        ];
        $options = [
            'projection' => [
                'saleArray' => true
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $sales = [];
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
//            echo "<pre>";
//            print_r($document);
//            echo "</pre>";
            $sale = mongoToClass($document, new Sale(), true);
            $sales[] = $sale;
        }
        return $sales;
    }
}
