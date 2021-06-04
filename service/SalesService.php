<?php

use MongoDB\Driver\Query;

require_once __SITE_PATH . '/app/database/mongodb.class.php';
require_once __SITE_PATH . '/util/mongoToClassUtil.php';

class SalesService
{
    static function getSalesForProduct($productId)
    {
        $manager = mongoDB::getConnection();
        $id = new MongoDB\BSON\ObjectId("$productId");

        $filter = [
            'saleArray.productId' => $id
        ];
        $options = [
            'projection' => [
                'saleArray' => [
                    '$elemMatch' => [
                        'productId' => $id
                    ]
                ], '_id' => 0
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $manager->executeQuery('projekt.users', $query);
        $sales = [];
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
//            echo '<pre>';
//            print_r($document);
//            echo '</pre>';
//            echo '<br>';
            $sale = mongoToClass($document, new Sale(), true);
            $sales[] = $sale;
        }
        return $sales;
    }
}
