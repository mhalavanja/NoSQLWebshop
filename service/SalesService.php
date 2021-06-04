<?php


class SalesService
{
    //    static function getSales($reviewId)
    //    {
    //
    //    }

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
        $query = new \MongoDB\Driver\Query($filter, $options);
        $rows   = $m->executeQuery('projekt.users', $query);
        foreach ($rows as $document) {
            $document = json_decode(json_encode($document), true);
            echo '<pre>';
            print_r($document);
            echo '</pre>';
            echo '<br>';
        }
    }
}
