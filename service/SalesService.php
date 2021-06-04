<?php

use MongoDB\Driver\Query;

require_once __SITE_PATH . '/app/database/mongodb.class.php';


class SalesService
{
    static function getSalesForProduct($productId)
    {
        $m = mongoDB::getConnection();
        $filter = [
            'saleArray.productId' => $productId
        ];
        $options = [
            'projection' => [
                'saleArray' => [
                    '$elemMatch' => [
                        'productId' => $productId
                    ]
                ]
            ]
        ];
        $query = new Query($filter, $options);
        $rows = $m->executeQuery('projekt.users', $query);
        $sales = [];
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
//            echo '<pre>';
//            print_r($document);
//            echo '</pre>';
//            echo '<br>';
            $sale = mongoToClass($document, new Sale());
            $sales[] = $sale;
        }
        return $sales;
    }
}
