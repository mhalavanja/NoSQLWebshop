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
            '_id' => $id
        ];
        $options = [
            'projection' => [
                'saleArray' => true,
                '_id' => false
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $sales = [];
        foreach ($rows as $row) {
            $row = json_decode(json_encode($row), true);
            foreach ($row["saleArray"] as $document) $sales[] = mongoToClass($document, new Sale());
        }
        return $sales;
    }

    static function saveSale($sale)
    {
        $bulk = new MongoDB\Driver\BulkWrite;
        $sale->setId(new MongoDB\BSON\ObjectId);
        $sale->setUserId(new MongoDB\BSON\ObjectId($sale->getUserId()));
        $sale->setProductId(new MongoDB\BSON\ObjectId($sale->getProductId()));

        $filter = ["_id" => $sale->getUserId()];
        $newObj = ['$addToSet' => ['saleArray' => $sale->getFieldsForSave()]];
        $bulk->update($filter, $newObj);

        $mongo = mongoDB::getConnection();

        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
        return $result;
    }

    static function setFeedback($sale)
    {
        $bulk = new MongoDB\Driver\BulkWrite;
        $sale->setId(new MongoDB\BSON\ObjectId($sale->getId()));
        $sale->setUserId(new MongoDB\BSON\ObjectId($sale->getUserId()));

        $filter = ["_id" => $sale->getUserId(), "saleArray._id" => $sale->getId()];
        $newObj = ['$set' => $sale->getFieldsForFeedbackSave()];
        $bulk->update($filter, $newObj);

        $mongo = mongoDB::getConnection();

        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
        return $result;
    }
}
