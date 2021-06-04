<?php

function generateRandomString($length = 10)
{
    $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
    $charactersLength = strlen($characters);
    $randomString = '';
    for ($i = 0; $i < $length; $i++) {
        $randomString .= $characters[rand(0, $charactersLength - 1)];
    }
    return $randomString;
}

$user_id_1 = new MongoDB\BSON\ObjectId;
$product_id_1_1 = new MongoDB\BSON\ObjectId;
$product_id_1_2 = new MongoDB\BSON\ObjectId;
$product_id_1_3 = new MongoDB\BSON\ObjectId;
$sale_id_1_1 = new MongoDB\BSON\ObjectId;
$sale_id_1_2 = new MongoDB\BSON\ObjectId;
$sale_id_1_3 = new MongoDB\BSON\ObjectId;

$user_id_2 = new MongoDB\BSON\ObjectId;
$product_id_2_1 = new MongoDB\BSON\ObjectId;
$product_id_2_2 = new MongoDB\BSON\ObjectId;
$product_id_2_3 = new MongoDB\BSON\ObjectId;
$sale_id_2_1 = new MongoDB\BSON\ObjectId;
$sale_id_2_2 = new MongoDB\BSON\ObjectId;
$sale_id_2_3 = new MongoDB\BSON\ObjectId;


$user_id_3 = new MongoDB\BSON\ObjectId;
$product_id_3_1 = new MongoDB\BSON\ObjectId;
$product_id_3_2 = new MongoDB\BSON\ObjectId;
$product_id_3_3 = new MongoDB\BSON\ObjectId;
$sale_id_3_1 = new MongoDB\BSON\ObjectId;
$sale_id_3_2 = new MongoDB\BSON\ObjectId;
$sale_id_3_3 = new MongoDB\BSON\ObjectId;


$user_id_4 = new MongoDB\BSON\ObjectId;
$product_id_4_1 = new MongoDB\BSON\ObjectId;
$product_id_4_2 = new MongoDB\BSON\ObjectId;
$product_id_4_3 = new MongoDB\BSON\ObjectId;
$sale_id_4_1 = new MongoDB\BSON\ObjectId;
$sale_id_4_2 = new MongoDB\BSON\ObjectId;
$sale_id_4_3 = new MongoDB\BSON\ObjectId;


$user_id_5 = new MongoDB\BSON\ObjectId;
$product_id_5_1 = new MongoDB\BSON\ObjectId;
$product_id_5_2 = new MongoDB\BSON\ObjectId;
$product_id_5_3 = new MongoDB\BSON\ObjectId;
$sale_id_5_1 = new MongoDB\BSON\ObjectId;
$sale_id_5_2 = new MongoDB\BSON\ObjectId;
$sale_id_5_3 = new MongoDB\BSON\ObjectId;

$user_id_6 = new MongoDB\BSON\ObjectId;
$product_id_6_1 = new MongoDB\BSON\ObjectId;
$product_id_6_2 = new MongoDB\BSON\ObjectId;
$product_id_6_3 = new MongoDB\BSON\ObjectId;
$sale_id_6_1 = new MongoDB\BSON\ObjectId;
$sale_id_6_2 = new MongoDB\BSON\ObjectId;
$sale_id_6_3 = new MongoDB\BSON\ObjectId;


$user_id_7 = new MongoDB\BSON\ObjectId;
$product_id_7_1 = new MongoDB\BSON\ObjectId;
$product_id_7_2 = new MongoDB\BSON\ObjectId;
$product_id_7_3 = new MongoDB\BSON\ObjectId;
$sale_id_7_1 = new MongoDB\BSON\ObjectId;
$sale_id_7_2 = new MongoDB\BSON\ObjectId;
$sale_id_7_3 = new MongoDB\BSON\ObjectId;


$user_id_8 = new MongoDB\BSON\ObjectId;
$product_id_8_1 = new MongoDB\BSON\ObjectId;
$product_id_8_2 = new MongoDB\BSON\ObjectId;
$product_id_8_3 = new MongoDB\BSON\ObjectId;
$sale_id_8_1 = new MongoDB\BSON\ObjectId;
$sale_id_8_2 = new MongoDB\BSON\ObjectId;
$sale_id_8_3 = new MongoDB\BSON\ObjectId;


$user_id_9 = new MongoDB\BSON\ObjectId;
$product_id_9_1 = new MongoDB\BSON\ObjectId;
$product_id_9_2 = new MongoDB\BSON\ObjectId;
$product_id_9_3 = new MongoDB\BSON\ObjectId;
$sale_id_9_1 = new MongoDB\BSON\ObjectId;
$sale_id_9_2 = new MongoDB\BSON\ObjectId;
$sale_id_9_3 = new MongoDB\BSON\ObjectId;


$user_id_10 = new MongoDB\BSON\ObjectId;
$product_id_10_1 = new MongoDB\BSON\ObjectId;
$product_id_10_2 = new MongoDB\BSON\ObjectId;
$product_id_10_3 = new MongoDB\BSON\ObjectId;
$sale_id_10_1 = new MongoDB\BSON\ObjectId;
$sale_id_10_2 = new MongoDB\BSON\ObjectId;
$sale_id_10_3 = new MongoDB\BSON\ObjectId;


$user_id_11 = new MongoDB\BSON\ObjectId;
$product_id_11_1 = new MongoDB\BSON\ObjectId;
$product_id_11_2 = new MongoDB\BSON\ObjectId;
$product_id_11_3 = new MongoDB\BSON\ObjectId;
$sale_id_11_1 = new MongoDB\BSON\ObjectId;
$sale_id_11_2 = new MongoDB\BSON\ObjectId;
$sale_id_11_3 = new MongoDB\BSON\ObjectId;


$user_id_12 = new MongoDB\BSON\ObjectId;
$product_id_12_1 = new MongoDB\BSON\ObjectId;
$product_id_12_2 = new MongoDB\BSON\ObjectId;
$product_id_12_3 = new MongoDB\BSON\ObjectId;
$sale_id_12_1 = new MongoDB\BSON\ObjectId;
$sale_id_12_2 = new MongoDB\BSON\ObjectId;
$sale_id_12_3 = new MongoDB\BSON\ObjectId;


$user_id_13 = new MongoDB\BSON\ObjectId;
$product_id_13_1 = new MongoDB\BSON\ObjectId;
$product_id_13_2 = new MongoDB\BSON\ObjectId;
$product_id_13_3 = new MongoDB\BSON\ObjectId;
$sale_id_13_1 = new MongoDB\BSON\ObjectId;
$sale_id_13_2 = new MongoDB\BSON\ObjectId;
$sale_id_13_3 = new MongoDB\BSON\ObjectId;


$user_id_14 = new MongoDB\BSON\ObjectId;
$product_id_14_1 = new MongoDB\BSON\ObjectId;
$product_id_14_2 = new MongoDB\BSON\ObjectId;
$product_id_14_3 = new MongoDB\BSON\ObjectId;
$sale_id_14_1 = new MongoDB\BSON\ObjectId;
$sale_id_14_2 = new MongoDB\BSON\ObjectId;
$sale_id_14_3 = new MongoDB\BSON\ObjectId;


$user_id_15 = new MongoDB\BSON\ObjectId;
$product_id_15_1 = new MongoDB\BSON\ObjectId;
$product_id_15_2 = new MongoDB\BSON\ObjectId;
$product_id_15_3 = new MongoDB\BSON\ObjectId;
$sale_id_15_1 = new MongoDB\BSON\ObjectId;
$sale_id_15_2 = new MongoDB\BSON\ObjectId;
$sale_id_15_3 = new MongoDB\BSON\ObjectId;


$user_id_16 = new MongoDB\BSON\ObjectId;
$product_id_16_1 = new MongoDB\BSON\ObjectId;
$product_id_16_2 = new MongoDB\BSON\ObjectId;
$product_id_16_3 = new MongoDB\BSON\ObjectId;
$sale_id_16_1 = new MongoDB\BSON\ObjectId;
$sale_id_16_2 = new MongoDB\BSON\ObjectId;
$sale_id_16_3 = new MongoDB\BSON\ObjectId;


$user_id_17 = new MongoDB\BSON\ObjectId;
$product_id_17_1 = new MongoDB\BSON\ObjectId;
$product_id_17_2 = new MongoDB\BSON\ObjectId;
$product_id_17_3 = new MongoDB\BSON\ObjectId;
$sale_id_17_1 = new MongoDB\BSON\ObjectId;
$sale_id_17_2 = new MongoDB\BSON\ObjectId;
$sale_id_17_3 = new MongoDB\BSON\ObjectId;


$user_id_18 = new MongoDB\BSON\ObjectId;
$product_id_18_1 = new MongoDB\BSON\ObjectId;
$product_id_18_2 = new MongoDB\BSON\ObjectId;
$product_id_18_3 = new MongoDB\BSON\ObjectId;
$sale_id_18_1 = new MongoDB\BSON\ObjectId;
$sale_id_18_2 = new MongoDB\BSON\ObjectId;
$sale_id_18_3 = new MongoDB\BSON\ObjectId;


$user_id_19 = new MongoDB\BSON\ObjectId;
$product_id_19_1 = new MongoDB\BSON\ObjectId;
$product_id_19_2 = new MongoDB\BSON\ObjectId;
$product_id_19_3 = new MongoDB\BSON\ObjectId;
$sale_id_19_1 = new MongoDB\BSON\ObjectId;
$sale_id_19_2 = new MongoDB\BSON\ObjectId;
$sale_id_19_3 = new MongoDB\BSON\ObjectId;


$user_id_20 = new MongoDB\BSON\ObjectId;
$product_id_20_1 = new MongoDB\BSON\ObjectId;
$product_id_20_2 = new MongoDB\BSON\ObjectId;
$product_id_20_3 = new MongoDB\BSON\ObjectId;
$sale_id_20_1 = new MongoDB\BSON\ObjectId;
$sale_id_20_2 = new MongoDB\BSON\ObjectId;
$sale_id_20_3 = new MongoDB\BSON\ObjectId;


$user_id_21 = new MongoDB\BSON\ObjectId;
$product_id_21_1 = new MongoDB\BSON\ObjectId;
$product_id_21_2 = new MongoDB\BSON\ObjectId;
$product_id_21_3 = new MongoDB\BSON\ObjectId;
$sale_id_21_1 = new MongoDB\BSON\ObjectId;
$sale_id_21_2 = new MongoDB\BSON\ObjectId;
$sale_id_21_3 = new MongoDB\BSON\ObjectId;


$user_id_22 = new MongoDB\BSON\ObjectId;
$product_id_22_1 = new MongoDB\BSON\ObjectId;
$product_id_22_2 = new MongoDB\BSON\ObjectId;
$product_id_22_3 = new MongoDB\BSON\ObjectId;
$sale_id_22_1 = new MongoDB\BSON\ObjectId;
$sale_id_22_2 = new MongoDB\BSON\ObjectId;
$sale_id_22_3 = new MongoDB\BSON\ObjectId;


$user_id_23 = new MongoDB\BSON\ObjectId;
$product_id_23_1 = new MongoDB\BSON\ObjectId;
$product_id_23_2 = new MongoDB\BSON\ObjectId;
$product_id_23_3 = new MongoDB\BSON\ObjectId;
$sale_id_23_1 = new MongoDB\BSON\ObjectId;
$sale_id_23_2 = new MongoDB\BSON\ObjectId;
$sale_id_23_3 = new MongoDB\BSON\ObjectId;


$user_id_24 = new MongoDB\BSON\ObjectId;
$product_id_24_1 = new MongoDB\BSON\ObjectId;
$product_id_24_2 = new MongoDB\BSON\ObjectId;
$product_id_24_3 = new MongoDB\BSON\ObjectId;
$sale_id_24_1 = new MongoDB\BSON\ObjectId;
$sale_id_24_2 = new MongoDB\BSON\ObjectId;
$sale_id_24_3 = new MongoDB\BSON\ObjectId;


$user_id_25 = new MongoDB\BSON\ObjectId;
$product_id_25_1 = new MongoDB\BSON\ObjectId;
$product_id_25_2 = new MongoDB\BSON\ObjectId;
$product_id_25_3 = new MongoDB\BSON\ObjectId;
$sale_id_25_1 = new MongoDB\BSON\ObjectId;
$sale_id_25_2 = new MongoDB\BSON\ObjectId;
$sale_id_25_3 = new MongoDB\BSON\ObjectId;


$user_id_26 = new MongoDB\BSON\ObjectId;
$product_id_26_1 = new MongoDB\BSON\ObjectId;
$product_id_26_2 = new MongoDB\BSON\ObjectId;
$product_id_26_3 = new MongoDB\BSON\ObjectId;
$sale_id_26_1 = new MongoDB\BSON\ObjectId;
$sale_id_26_2 = new MongoDB\BSON\ObjectId;
$sale_id_26_3 = new MongoDB\BSON\ObjectId;


$user_id_27 = new MongoDB\BSON\ObjectId;
$product_id_27_1 = new MongoDB\BSON\ObjectId;
$product_id_27_2 = new MongoDB\BSON\ObjectId;
$product_id_27_3 = new MongoDB\BSON\ObjectId;
$sale_id_27_1 = new MongoDB\BSON\ObjectId;
$sale_id_27_2 = new MongoDB\BSON\ObjectId;
$sale_id_27_3 = new MongoDB\BSON\ObjectId;


$user_id_28 = new MongoDB\BSON\ObjectId;
$product_id_28_1 = new MongoDB\BSON\ObjectId;
$product_id_28_2 = new MongoDB\BSON\ObjectId;
$product_id_28_3 = new MongoDB\BSON\ObjectId;
$sale_id_28_1 = new MongoDB\BSON\ObjectId;
$sale_id_28_2 = new MongoDB\BSON\ObjectId;
$sale_id_28_3 = new MongoDB\BSON\ObjectId;


$user_id_29 = new MongoDB\BSON\ObjectId;
$product_id_29_1 = new MongoDB\BSON\ObjectId;
$product_id_29_2 = new MongoDB\BSON\ObjectId;
$product_id_29_3 = new MongoDB\BSON\ObjectId;
$sale_id_29_1 = new MongoDB\BSON\ObjectId;
$sale_id_29_2 = new MongoDB\BSON\ObjectId;
$sale_id_29_3 = new MongoDB\BSON\ObjectId;


$user_id_30 = new MongoDB\BSON\ObjectId;
$product_id_30_1 = new MongoDB\BSON\ObjectId;
$product_id_30_2 = new MongoDB\BSON\ObjectId;
$product_id_30_3 = new MongoDB\BSON\ObjectId;
$sale_id_30_1 = new MongoDB\BSON\ObjectId;
$sale_id_30_2 = new MongoDB\BSON\ObjectId;
$sale_id_30_3 = new MongoDB\BSON\ObjectId;



$documents = [
    // USER 1
    [
        "_id" => $user_id_1,
        "username" => "mirko123",
        "password_hash" => password_hash("mirkovasifra", PASSWORD_DEFAULT),
        "email" => "mirko123@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Mirko",
        "lastname" => "Mirković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [
            [
                "product_id" => $product_id_1_1,
                "name" => "iPhone 11 Pro",
                "description" => "iPhone 11 Pro 64GB Space Grey",
                "category" => "Elektronika",
                "price" => "7399"
            ],
            [
                "product_id" => $product_id_1_2,
                "name" => "Apple Watch 6",
                "description" => "Apple Watch Series 6 Nikey",
                "category" => "Elektronika",
                "price" => "3499"
            ],
            [
                "product_id" => $product_id_1_3,
                "name" => "NeoFrost hladnjak",
                "description" => "Kombinirani hladnjak NeoFrost Dual Cooling",
                "category" => "Elektronika",
                "price" => "3199"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_1_1,
                "user_id" => $user_id_3,                         // user 3 mora imati ovaj prduct
                "product_id" => $product_id_3_2,
                "name" => "Pošip vino",
                "description" => "Vrhunsko bijelo vino Pošip",
                "category" => "Pića",
                "price" => "14.99",
                "rating" => 4,
                "comment" => "Awesome. I would recommend this wine to anyone.",
                "quantity" => 4
            ]
        ]
    ],
    // USER 2
    [
        "_id" => $user_id_2,
        "username" => "ana",
        "password_hash" => password_hash("aninasifra", PASSWORD_DEFAULT),
        "email" => "ana@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Ana",
        "lastname" => "Anić",
        "favorite_categories" => [
            "category_id" => 3,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_2_1,
                "name" => "Svinjski vrat",
                "description" => "PIK Svinjski vrat s kostima odrezak 640 g",
                "category" => "Hrana",
                "price" => "19.99"
            ],
            [
                "product_id" => $product_id_2_2,
                "name" => "Luk mladi",
                "description" => "Luk mladi vezica",
                "category" => "Hrana",
                "price" => "5.99"
            ],
            [
                "product_id" => $product_id_2_3,
                "name" => "Smart fortwo cdi",
                "description" => "SMART FOR TWO, DIESEL, PASSION OPREMA, SERVISNA KNJIGA",
                "category" => "Automobili",
                "price" => "36354"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_2_1,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_1,
                "name" => "iPhone 11 Pro",
                "description" => "iPhone 11 Pro 64GB Space Grey",
                "category" => "Elektronika",
                "price" => "7399",
                "comment" => "Zadovoljna sam s mobitelom. Odlična kamera.",
                "rating" => 4,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_2_2,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_1,
                "name" => "Istarski pršut",
                "description" => "Istarski sušeni pršut u komadu",
                "category" => "Hrana",
                "price" => "170",
                "comment" => "Topla preporuka.",
                "rating" => 5,
                "quantity" => 2
            ]
        ]
    ],
    // USER 3
    [
        "_id" => $user_id_3,
        "username" => "toni",
        "password_hash" => password_hash("tonijevasifra", PASSWORD_DEFAULT),
        "email" => "toni@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Toni",
        "lastname" => "Tomić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_3_1,
                "name" => "Istarski pršut",
                "description" => "Istarski sušeni pršut u komadu",
                "category" => "Hrana",
                "price" => "170"
            ],
            [
                "product_id" => $product_id_3_2,
                "name" => "BMW 4 Gran Coupe",
                "description" => "BMW serija 4 Gran Coupe 418d Sport automatik,FULL,JAMSTVO 12MJESECI..",
                "category" => "Automobili",
                "price" => "170407"
            ],
            [
                "product_id" => $product_id_3_3,
                "name" => "Pošip vino",
                "description" => "Vrhunsko bijelo vino Pošip",
                "category" => "Pića",
                "price" => "14.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_3_1,
                "user_id" => $user_id_4,
                "product_id" => $product_id_4_2,
                "name" => "Ford Mondeo",
                "description" => "Ford Mondeo 1.5 TDCi Econetic Trend 2015",
                "category" => "Automobili",
                "price" => "92000",
                "comment" => "Dobar auto",
                "rating" => 3,
                "quantity" => 1
            ]
        ]
    ],
    // USER 4
    [
        "_id" => $user_id_4,
        "username" => "maja",
        "password_hash" => password_hash("majinasifra", PASSWORD_DEFAULT),
        "email" => "maja@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Maja",
        "lastname" => "Majić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pića"
        ],
        "products" => [
            [
                "product_id" => $product_id_4_1,
                "name" => "ABSINTHE BOHEME",
                "description" => "ABSINTHE BOHEME BLUE RODNIK`S 0,7L -6/1- 70% ",
                "category" => "Pića",
                "price" => "99.90"
            ],
            [
                "product_id" => $product_id_4_2,
                "name" => "Ford Mondeo",
                "description" => "Ford Mondeo 1.5 TDCi Econetic Trend 2015",
                "category" => "Automobili",
                "price" => "92000"
            ],
            [
                "product_id" => $product_id_4_3,
                "name" => "Pošip vino",
                "description" => "Vrhunsko bijelo vino Pošip - Pelješac",
                "category" => "Pića",
                "price" => "17.99",
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_4_1,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_2,
                "name" => "Pošip vino",
                "description" => "Vrhunsko bijelo vino Pošip",
                "category" => "Pića",
                "price" => "14.99",
                "comment" => "Super.",
                "rating" => 5,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_4_2,
                "user_id" => $user_id_5,
                "product_id" => $product_id_5_1,
                "name" => "Jack Daniels",
                "description" => "Jack Daniels 0,7L",
                "category" => "Pića",
                "price" => "156.99",
                "comment" => "Nije loš, preporučujem.",
                "rating" => 4,
                "quantity" => 3
            ]
        ]
    ],
    // USER 5
    [
        "_id" => $user_id_5,
        "username" => "pero",
        "password_hash" => password_hash("perinasifra", PASSWORD_DEFAULT),
        "email" => "pero@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Pero",
        "lastname" => "Perić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_5_1,
                "name" => "Jack Daniels",
                "description" => "Jack Daniels 0,7L",
                "category" => "Pića",
                "price" => "156.99"
            ],
            [
                "product_id" => $product_id_5_2,
                "name" => "Šparoga 500g",
                "description" => "Šparoga 500g vezica. Proizvod s hrvatskih polja.",
                "category" => "Hrana",
                "price" => "14.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_5_1,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_1,
                "name" => "Istarski pršut",
                "description" => "Istarski sušeni pršut u komadu",
                "category" => "Hrana",
                "price" => "170",
                "comment" => "Najbolji pršut koji sam ikad probao!!",
                "rating" => 5,
                "quantity" => 5
            ],
            [
                "sale_id" => $sale_id_5_2,
                "user_id" => $user_id_8,
                "product_id" => $product_id_8_1,
                "name" => "Paški sir",
                "description" => "Paški sir okrugli 1kg od 100% ovčijeg mlijeka.",
                "category" => "Hrana",
                "price" => "240",
                "comment" => "Izvrstan sir.",
                "rating" => 5,
                "quantity" => 3
            ]
        ]
    ],
    // USER 6
    [
        "_id" => $user_id_6,
        "username" => "alex22",
        "password_hash" => password_hash("alex22sifra", PASSWORD_DEFAULT),
        "email" => "alex22@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Alexandara",
        "lastname" => "Aleksić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_6_1,
                "name" => "Apple Adapter",
                "description" => "Apple USB-C to USB Adapter",
                "category" => "Elektronika",
                "price" => "259"
            ],
            [
                "product_id" => $product_id_6_2,
                "name" => "Audi A3 1,6",
                "description" => "Audi A3 1,6 TDI LIMUZINA , AUDI SERVISNA , 59TKM, JAMSTVO 2 GOD",
                "category" => "Automobili",
                "price" => "128600"
            ],
            [
                "product_id" => $product_id_6_3,
                "name" => "Dunlop gume",
                "description" => "Ljetne gume Dunlop/ Zimske s čeličnim felgama",
                "category" => "Automobili",
                "price" => "600"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_6_1,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_2,
                "name" => "BMW 4 Gran Coupe",
                "description" => "BMW serija 4 Gran Coupe 418d Sport automatik,FULL,JAMSTVO 12MJESECI..",
                "category" => "Automobili",
                "price" => "170407",
                "comment" => "Razočaravajuće.",
                "rating" => 1,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_6_2,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_2,
                "name" => "Apple Watch 6",
                "description" => "Apple Watch Series 6 Nikey",
                "category" => "Elektronika",
                "price" => "3499",
                "comment" => "Nisam odušeljena ovim satom. Mislim da mora biti bolje za ovu cijenu.",
                "rating" => 3,
                "quantity" => 1
            ]
        ]
    ],
    // USER 7
    [
        "_id" => $user_id_7,
        "username" => "ivona",
        "password_hash" => password_hash("ivoninasifra", PASSWORD_DEFAULT),
        "email" => "ivona@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Ivona",
        "lastname" => "Ivošević",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [[]],
        "sales" => [
            [
                "sale_id" => $sale_id_7_1,
                "user_id" => $user_id_6,
                "product_id" => $product_id_6_1,
                "name" => "Apple Adapter",
                "description" => "Apple USB-C to USB Adapter",
                "category" => "Elektronika",
                "price" => "259",
                "comment" => "Zadovoljna sam.",
                "rating" => 4,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_7_2,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_2,
                "name" => "Apple Watch 6",
                "description" => "Apple Watch Series 6 Nikey",
                "category" => "Elektronika",
                "price" => "3499",
                "comment" => "Sat lijepo izgleda.",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 8
    [
        "_id" => $user_id_8,
        "username" => "mićo",
        "password_hash" => password_hash("micinasifra", PASSWORD_DEFAULT),
        "email" => "mico23zg@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Miljenko",
        "lastname" => "Milić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_8_1,
                "name" => "Paški sir",
                "description" => "Paški sir okrugli 1kg od 100% ovčijeg mlijeka.",
                "category" => "Hrana",
                "price" => "240"
            ],
            [
                "product_id" => $product_id_8_2,
                "name" => "Kukuruzno brašno",
                "description" => "Grubo mljeveno kukuruzno brašno bez dodataka 1kg",
                "category" => "Hrana",
                "price" => "34.90"
            ],
            [
                "product_id" => $product_id_8_3,
                "name" => "Krumpiri mladi",
                "description" => "Mladi krumpir vreća 10kg - Varaždin",
                "category" => "Hrana",
                "price" => "31.80"
            ]
        ],
        "sales" => [[]]
    ],
    // USER 9
    [
        "_id" => $user_id_9,
        "username" => "timon",
        "password_hash" => password_hash("timonsifra", PASSWORD_DEFAULT),
        "email" => "timon@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Tihomir",
        "lastname" => "Monković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_9_1,
                "name" => "Michelin Primacy 4 XL",
                "description" => "Gume Michelin Primacy 4 XL, 2020 NOVO 205/55/17",
                "category" => "Automobili",
                "price" => "660"
            ],
            [
                "product_id" => $product_id_9_2,
                "name" => "Beko perilica",
                "description" => "Perilica posuđa. Kapacitet: 14 kompleta 6 programa pranja 5 temperatura pranja (35°/40°/50°/65°/70°)",
                "category" => "Elektronika",
                "price" => "2999"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_9_1,
                "user_id" => $user_id_6,
                "product_id" => $product_id_6_3,
                "name" => "Dunlop gume",
                "description" => "Ljetne gume Dunlop/ Zimske s čeličnim felgama",
                "category" => "Automobili",
                "price" => "600",
                "comment" => "Gume su bile potrosene.",
                "rating" => 2,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_9_2,
                "user_id" => $user_id_4,
                "product_id" => $product_id_4_2,
                "name" => "Ford Mondeo",
                "description" => "Ford Mondeo 1.5 TDCi Econetic Trend 2015",
                "category" => "Automobili",
                "price" => "92000",
                "comment" => "Dobar auto za dobru cijenu...",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 10
    [
        "_id" => $user_id_10,
        "username" => "marta05",
        "password_hash" => password_hash("marta05sifra", PASSWORD_DEFAULT),
        "email" => "marta05@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Marta",
        "lastname" => "Martić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_10_1,
                "name" => "Batat",
                "description" => "Ekozona batat ljubičasti 500g",
                "category" => "Hrana",
                "price" => "16.99"
            ],
            [
                "product_id" => $product_id_10_2,
                "name" => "Krumpiri mladi",
                "description" => "Mladi krumpir vreća 10kg - Varaždin",
                "category" => "Hrana",
                "price" => "28.50"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_10_1,
                "user_id" => $user_id_8,
                "product_id" => $product_id_8_2,
                "name" => "Kukuruzno brašno",
                "description" => "Grubo mljeveno kukuruzno brašno bez dodataka 1kg",
                "category" => "Hrana",
                "price" => "34.90",
                "comment" => "Super. Odličan je kruh od ovog brašna.",
                "rating" => 5,
                "quantity" => 7
            ],
            [
                "sale_id" => $sale_id_10_2,
                "user_id" => $user_id_2,
                "product_id" => $product_id_2_1,
                "name" => "Svinjski vrat",
                "description" => "PIK Svinjski vrat s kostima odrezak 640 g",
                "category" => "Hrana",
                "price" => "19.99",
                "comment" => "Solidno...",
                "rating" => 3,
                "quantity" => 3
            ]
        ]
    ],
    // USER 11
    [
        "_id" => $user_id_11,
        "username" => "vinko",
        "password_hash" => password_hash("vinkovasifra", PASSWORD_DEFAULT),
        "email" => "vinko@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Vinko",
        "lastname" => "Vinković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [
            [
                "product_id" => $product_id_11_1,
                "name" => "Laptop HP 430",
                "description" => "HP Probook 430 G3",
                "category" => "Elektronika",
                "price" => "4116.99"
            ],
            [
                "product_id" => $product_id_11_2,
                "name" => "Mobitel Sony Xperia",
                "description" => "Sony Xperia 3GB New",
                "category" => "Elektronika",
                "price" => "4500"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_11_1,
                "user_id" => $user_id_14,
                "product_id" => $product_id_14_2,
                "name" => "USB Kabel",
                "description" => "USB kabel 2m crni",
                "category" => "Elektronika",
                "price" => "30.90",
                "comment" => "Super. Odličan kabel. Punjenje nije sporo.",
                "rating" => 5,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_11_2,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_2,
                "name" => "Apple Watch 6",
                "description" => "Apple Watch Series 6 Nikey",
                "category" => "Elektronika",
                "price" => "3499",
                "comment" => "Sat je ok.",
                "rating" => 3,
                "quantity" => 1
            ]
        ]
    ],
    // USER 12
    [
        "_id" => $user_id_12,
        "username" => "john",
        "password_hash" => password_hash("johnsifra", PASSWORD_DEFAULT),
        "email" => "john@net.us",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "John",
        "lastname" => "McDonald",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_12_1,
                "name" => "Ford Mustang Shellby",
                "description" => "Ford Mustan Shellby 500KS",
                "category" => "Automobili",
                "price" => "250000"
            ],
            [
                "product_id" => $product_id_12_2,
                "name" => "Gume Michellin R19",
                "description" => "Gume Michellin 245/35/19 Novo - Ljetne gume.",
                "category" => "Automobili",
                "price" => "5500"
            ],
            [
                "product_id" => $product_id_12_3,
                "name" => "Dell Laptop e7240",
                "description" => "Dell Laptop e7240 SSD 512GB 16GB RAM",
                "category" => "Elektronika",
                "price" => "8700"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_12_1,
                "user_id" => $user_id_6,
                "product_id" => $product_id_6_3,
                "name" => "Dunlop gume",
                "description" => "Ljetne gume Dunlop/ Zimske s čeličnim felgama",
                "category" => "Automobili",
                "price" => "600",
                "comment" => "Preporuka za gume.",
                "rating" => 5,
                "quantity" => 1
            ]
        ]
    ],
    // USER 13
    [
        "_id" => $user_id_13,
        "username" => "maria",
        "password_hash" => password_hash("mariasifra", PASSWORD_DEFAULT),
        "email" => "maria@net.es",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Maria",
        "lastname" => "Perez",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_13_1,
                "name" => "Rotkvice",
                "description" => "Rotkvice mlade, vezica 500g",
                "category" => "Hrana",
                "price" => "21.99"
            ],
            [
                "product_id" => $product_id_13_2,
                "name" => "Zobene pahuljice",
                "description" => "Miješane zobene pahuljice.",
                "category" => "Hrana",
                "price" => "27.50"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_13_1,
                "user_id" => $user_id_14,
                "product_id" => $product_id_14_1,
                "name" => "Mobitel Samsung A52",
                "description" => "Samsung A52 Galaxy mobitel - crni 2021",
                "category" => "Elektronika",
                "price" => "4350",
                "comment" => "Razočaravajuće. Očekivala sam bolje.",
                "rating" => 2,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_13_2,
                "user_id" => $user_id_10,
                "product_id" => $product_id_10_1,
                "name" => "Batat",
                "description" => "Ekozona batat ljubičasti 500g",
                "category" => "Hrana",
                "price" => "16.99",
                "comment" => "Super super!!!",
                "rating" => 5,
                "quantity" => 3
            ]
        ]
    ],
    // USER 14
    [
        "_id" => $user_id_14,
        "username" => "ivan99",
        "password_hash" => password_hash("ivanovasifra", PASSWORD_DEFAULT),
        "email" => "ivan@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Ivan",
        "lastname" => "Ivanković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [
            [
                "product_id" => $product_id_14_1,
                "name" => "Mobitel Samsung A52",
                "description" => "Samsung A52 Galaxy mobitel - crni 2021",
                "category" => "Elektronika",
                "price" => "4350"
            ],
            [
                "product_id" => $product_id_14_2,
                "name" => "USB Kabel",
                "description" => "USB kabel 2m crni",
                "category" => "Elektronika",
                "price" => "30.90"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_14_1,
                "user_id" => $user_id_9,
                "product_id" => $product_id_9_2,
                "name" => "Beko perilica",
                "description" => "Perilica posuđa. Kapacitet: 14 kompleta 6 programa pranja 5 temperatura pranja (35°/40°/50°/65°/70°)",
                "category" => "Elektronika",
                "price" => "2999",
                "comment" => "Perilica odlično služi. Opet bih kupio.",
                "rating" => 5,
                "quantity" => 1
            ]
        ]
    ],
    // USER 15
    [
        "_id" => $user_id_15,
        "username" => "mirta",
        "password_hash" => password_hash("mirtinasifra", PASSWORD_DEFAULT),
        "email" => "mirta@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Mirta",
        "lastname" => "Comman",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_15_1,
                "name" => "Avokado",
                "description" => "Avokado vreća - 2kg",
                "category" => "Hrana",
                "price" => "99.90"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_15_1,
                "user_id" => $user_id_13,
                "product_id" => $product_id_13_1,
                "name" => "Rotkvice",
                "description" => "Rotkvice mlade, vezica 500g",
                "category" => "Hrana",
                "price" => "21.99",
                "comment" => "Odlično, svježe. Pohvale",
                "rating" => 5,
                "quantity" => 1
            ]
        ]
    ],
    // USER 16
    [
        "_id" => $user_id_16,
        "username" => "martin",
        "password_hash" => password_hash("martinovasifra", PASSWORD_DEFAULT),
        "email" => "martin@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Martin",
        "lastname" => "Martinović",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pića"
        ],
        "products" => [
            [
                "product_id" => $product_id_16_1,
                "name" => "Domaća medica",
                "description" => "Domaća medica 35%vol 1L",
                "category" => "Pića",
                "price" => "69.90"
            ],
            [
                "product_id" => $product_id_16_2,
                "name" => "Domaća travarica",
                "description" => "Domaća travarica 42%vol 1L",
                "category" => "Pića",
                "price" => "89.90"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_16_1,
                "user_id" => $user_id_4,
                "product_id" => $product_id_4_1,
                "name" => "ABSINTHE BOHEME",
                "description" => "ABSINTHE BOHEME BLUE RODNIK`S 0,7L -6/1- 70% ",
                "category" => "Pića",
                "price" => "99.90",
                "comment" => "Uuu.. :)",
                "rating" => 4,
                "quantity" => 2
            ],
            [
                "sale_id" => $sale_id_16_2,
                "user_id" => $user_id_11,
                "product_id" => $product_id_11_1,
                "name" => "Laptop HP 430",
                "description" => "HP Probook 430 G3",
                "category" => "Elektronika",
                "price" => "4116.99",
                "comment" => "Vrlo sam zadovoljan s laptopom.",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 17
    [
        "_id" => $user_id_17,
        "username" => "mia_97",
        "password_hash" => password_hash("miasifra", PASSWORD_DEFAULT),
        "email" => "mia_97@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Mia",
        "lastname" => "Mijić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pića"
        ],
        "products" => [
            []
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_17_1,
                "user_id" => $user_id_4,
                "product_id" => $product_id_4_1,
                "name" => "ABSINTHE BOHEME",
                "description" => "ABSINTHE BOHEME BLUE RODNIK`S 0,7L -6/1- 70% ",
                "category" => "Pića",
                "price" => "99.90",
                "comment" => "Ultra jako piće",
                "rating" => 2,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_17_2,
                "user_id" => $user_id_15,
                "product_id" => $product_id_15_1,
                "name" => "Avokado",
                "description" => "Avokado vreća - 2kg",
                "category" => "Hrana",
                "price" => "99.90",
                "comment" => "Avokado je bio svjež i ukusan.",
                "rating" => 5,
                "quantity" => 1
            ]
        ]
    ],
    // USER 18
    [
        "_id" => $user_id_18,
        "username" => "marko",
        "password_hash" => password_hash("markovasifra", PASSWORD_DEFAULT),
        "email" => "marko@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Marko",
        "lastname" => "Marković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_18_1,
                "name" => "VW Golf 7",
                "description" => "Volkswagen Golf MK 7 2.0 TDI",
                "category" => "Automobili",
                "price" => "115000"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_18_1,
                "user_id" => $user_id_12,
                "product_id" => $product_id_12_1,
                "name" => "Ford Mustang Shellby",
                "description" => "Ford Mustan Shellby 500KS",
                "category" => "Automobili",
                "price" => "250000",
                "comment" => "Auto je prva liga",
                "rating" => 5,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_18_2,
                "user_id" => $user_id_12,
                "product_id" => $product_id_12_3,
                "name" => "Dell Laptop e7240",
                "description" => "Dell Laptop e7240 SSD 512GB 16GB RAM",
                "category" => "Elektronika",
                "price" => "8700",
                "comment" => "Laptop se stalno gasi. Jako loše. Preskočite ovaj oglas.",
                "rating" => 2,
                "quantity" => 1
            ]
        ]
    ],
    // USER 19
    [
        "_id" => $user_id_19,
        "username" => "lana",
        "password_hash" => password_hash("laninasifra", PASSWORD_DEFAULT),
        "email" => "lana@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Lana",
        "lastname" => "Šimunović",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [
            [
                "product_id" => $product_id_19_1,
                "name" => "Galaxy Buds slušalice",
                "description" => "Galaxy Buds+ slušalice. Prve bežične slušalice s dvosmjernim zvučnicima koji pružaju zvuk koji Vam donosi AKG s izraženim visokim tonovima i dubokim basom",
                "category" => "Elektronika",
                "price" => "699.00"
            ],
            [
                "product_id" => $product_id_19_2,
                "name" => "DENVER BEŽIČNE BLUETOOTH slušalice TWE-3",
                "description" => "Bežične Bluetooth slušalice TWE-3 - bijele",
                "category" => "Elektronika",
                "price" => "159.00"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_19_1,
                "user_id" => $user_id_12,
                "product_id" => $product_id_12_3,
                "name" => "Dell Laptop e7240",
                "description" => "Dell Laptop e7240 SSD 512GB 16GB RAM",
                "category" => "Elektronika",
                "price" => "8700",
                "comment" => "Laptop je nestabilan.",
                "rating" => 3,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_19_2,
                "user_id" => $user_id_16,
                "product_id" => $product_id_16_1,
                "name" => "Domaća medica",
                "description" => "Domaća medica 35%vol 1L",
                "category" => "Pića",
                "price" => "69.90",
                "comment" => "Odlična domaća medica. Pohvale.",
                "rating" => 5,
                "quantity" => 2
            ]
        ]
    ],
    // USER 20
    [
        "_id" => $user_id_20,
        "username" => "karolina",
        "password_hash" => password_hash("karolininasifra", PASSWORD_DEFAULT),
        "email" => "karolina@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Karolina",
        "lastname" => "Karlović",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_20_1,
                "name" => "Dulcinea Vita Rezanci",
                "description" => "Dulcinea Vita Rezanci uski s narančastim batatom 200 g",
                "category" => "Hrana",
                "price" => "12.99"
            ],
            [
                "product_id" => $product_id_20_2,
                "name" => "Pirovo integralno brašno",
                "description" => "Farina Pirovo integralno brašno 1000 g",
                "category" => "Hrana",
                "price" => "14.99"
            ],
            [
                "product_id" => $product_id_20_2,
                "name" => "Integralni dvopek",
                "description" => "Mulino Bianco Integralni dvopek 315 g",
                "category" => "Hrana",
                "price" => "16.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_20_1,
                "user_id" => $user_id_10,
                "product_id" => $product_id_10_1,
                "name" => "Batat",
                "description" => "Ekozona batat ljubičasti 500g",
                "category" => "Hrana",
                "price" => "16.99",
                "comment" => "Jako ukusno i fino",
                "rating" => 5,
                "quantity" => 4
            ],
            [
                "sale_id" => $sale_id_20_2,
                "user_id" => $user_id_16,
                "product_id" => $product_id_16_1,
                "name" => "Domaća medica",
                "description" => "Domaća medica 35%vol 1L",
                "category" => "Pića",
                "price" => "69.90",
                "comment" => "Jako dobra rakija",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 21
    [
        "_id" => $user_id_21,
        "username" => "mišo",
        "password_hash" => password_hash("misinasifra", PASSWORD_DEFAULT),
        "email" => "miso@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Mišo",
        "lastname" => "Mišković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_21_1,
                "name" => "Pršut narezak",
                "description" => "Voštane Dalmatiko Pršut narezak 80 g",
                "category" => "Hrana",
                "price" => "17.99"
            ],
            [
                "product_id" => $product_id_21_2,
                "name" => "Tilzit sir",
                "description" => "Tilzit polutvrdi sir narezani 1kg",
                "category" => "Hrana",
                "price" => "69.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_21_1,
                "user_id" => $user_id_20,
                "product_id" => $product_id_20_1,
                "name" => "Dulcinea Vita Rezanci",
                "description" => "Dulcinea Vita Rezanci uski s narančastim batatom 200 g",
                "category" => "Hrana",
                "price" => "12.99",
                "comment" => "Opet ih kupujem.",
                "rating" => 5,
                "quantity" => 4
            ]
        ]
    ],
    // USER 22
    [
        "_id" => $user_id_22,
        "username" => "denis",
        "password_hash" => password_hash("denisovasifra", PASSWORD_DEFAULT),
        "email" => "denis@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Denis",
        "lastname" => "Desinec",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_22_1,
                "name" => "Citroën C5",
                "description" => "Citroën C5 Aircross FEEL 1.5BlueHDI 130KS EAT8",
                "category" => "Automobili",
                "price" => "227000"
            ],
            [
                "product_id" => $product_id_22_2,
                "name" => "Masažna fotelja",
                "description" => "Masažna fotelja Paradiso",
                "category" => "Elektronika",
                "price" => "800.00"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_22_1,
                "user_id" => $user_id_2,
                "product_id" => $product_id_2_3,
                "name" => "Smart fortwo cdi",
                "description" => "SMART FOR TWO, DIESEL, PASSION OPREMA, SERVISNA KNJIGA",
                "category" => "Automobili",
                "price" => "36354",
                "comment" => "Odličan gradski mali auto.",
                "rating" => 5,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_22_2,
                "user_id" => $user_id_28,
                "product_id" => $product_id_28_1,
                "name" => "Miris za auto",
                "description" => "Miris za auto - vanillia",
                "category" => "Automobili",
                "price" => "5.99",
                "comment" => "Super miris. Dugo traje.",
                "rating" => 5,
                "quantity" => 1
            ]
        ]
    ],
    // USER 23
    [
        "_id" => $user_id_23,
        "username" => "miro",
        "password_hash" => password_hash("mirosifra", PASSWORD_DEFAULT),
        "email" => "miro@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Miroslav",
        "lastname" => "Miroslavić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pića"
        ],
        "products" => [
            [
                "product_id" => $product_id_23_1,
                "name" => "Red Label Whiskey",
                "description" => "Johnnie Walker Red Label Whiskey 0,7L",
                "category" => "Pića",
                "price" => "102.00"
            ],
            [
                "product_id" => $product_id_23_2,
                "name" => "Samsung Galaxy S20",
                "description" => "Samsung galaxy S20 mobitel crni",
                "category" => "Elektronika",
                "price" => "4800.00"
            ],
            [
                "product_id" => $product_id_23_3,
                "name" => "Domaće crno vino",
                "description" => "Domaći crni Merlot 1L - Baranja",
                "category" => "Pića",
                "price" => "45.00"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_23_1,
                "user_id" => $user_id_25,
                "product_id" => $product_id_25_3,
                "name" => "Domaći sok od jabuke",
                "description" => "Domaći sok od hladno prešane jabuke 1L",
                "category" => "Pića",
                "price" => "12.50",
                "comment" => "Super sok, bez dodataka šećera.",
                "rating" => 5,
                "quantity" => 3
            ],
            [
                "sale_id" => $sale_id_23_1,
                "user_id" => $user_id_30,
                "product_id" => $product_id_30_1,
                "name" => "Sok od kadulje",
                "description" => "Domaći sok od cvijeta kadulje 1L.",
                "category" => "Pića",
                "price" => "20.99",
                "comment" => "Sok superzanimljivog okusa. Preporuka.",
                "rating" => 5,
                "quantity" => 3
            ]
        ]
    ],
    // USER 24
    [
        "_id" => $user_id_24,
        "username" => "ozana",
        "password_hash" => password_hash("ozaninasifra", PASSWORD_DEFAULT),
        "email" => "ozana@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Ozana",
        "lastname" => "Ozanić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [
            [
                "product_id" => $product_id_24_1,
                "name" => "Kurzweil PC3K8 Synthesizer",
                "description" => "Kurzweil PC3K8 sa 88 klavirskih tipki.  Revolucionarni novi PC3K, Kompatibilan s legendarnom K serijom",
                "category" => "Elektronika",
                "price" => "16985.60"
            ],
            [
                "product_id" => $product_id_24_2,
                "name" => "PreSonus mikseta",
                "description" => "PreSonus StudioLive AR16 USB digitalni mikser",
                "category" => "Elektronika",
                "price" => "4168.80"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_24_1,
                "user_id" => $user_id_26,
                "product_id" => $product_id_26_1,
                "name" => "Laserworld CS-2000RGB",
                "description" => "Laserworld CS-2000RGB RGB laserski sistem sa potpunom izlaznom snagom do 2,000mW",
                "category" => "Elektronika",
                "price" => "8800.00",
                "comment" => "Kvalitetna laserska rasvjeta.",
                "rating" => 4,
                "quantity" => 2
            ],
            [
                "sale_id" => $sale_id_24_2,
                "user_id" => $user_id_14,
                "product_id" => $product_id_14_2,
                "name" => "USB Kabel",
                "description" => "USB kabel 2m crni",
                "category" => "Elektronika",
                "price" => "30.90",
                "comment" => "Kabel je poslužio svrsi.",
                "rating" => 3,
                "quantity" => 1
            ]
        ]
    ],
    // USER 25
    [
        "_id" => $user_id_25,
        "username" => "ante",
        "password_hash" => password_hash("antinasifra", PASSWORD_DEFAULT),
        "email" => "ante@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Ante",
        "lastname" => "Antić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pića"
        ],
        "products" => [
            [
                "product_id" => $product_id_25_1,
                "name" => "Chivas Regal Whiskey",
                "description" => "WHISKY CHIVAS REGAL ULTIS0.7L KUTIJA ",
                "category" => "Pića",
                "price" => "1698.60"
            ],
            [
                "product_id" => $product_id_25_2,
                "name" => "Domaća loza",
                "description" => "Domaća loza 43%vol 1L",
                "category" => "Pića",
                "price" => "65.00"
            ],
            [
                "product_id" => $product_id_25_3,
                "name" => "Domaći sok od jabuke",
                "description" => "Domaći sok od hladno prešane jabuke 1L",
                "category" => "Pića",
                "price" => "12.50"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_25_1,
                "user_id" => $user_id_13,
                "product_id" => $product_id_13_2,
                "name" => "Zobene pahuljice",
                "description" => "Miješane zobene pahuljice.",
                "category" => "Hrana",
                "price" => "27.50",
                "comment" => "Super su.",
                "rating" => 5,
                "quantity" => 2
            ],
            [
                "sale_id" => $sale_id_25_2,
                "user_id" => $user_id_23,
                "product_id" => $product_id_23_3,
                "name" => "Domaće crno vino",
                "description" => "Domaći crni Merlot 1L - Baranja",
                "category" => "Pića",
                "price" => "45.00",
                "comment" => "Vino je malo kiselo. Ne bih ga uzeo opet.",
                "rating" => 3,
                "quantity" => 3
            ],
            [
                "sale_id" => $sale_id_25_3,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_1,
                "name" => "iPhone 11 Pro",
                "description" => "iPhone 11 Pro 64GB Space Grey",
                "category" => "Elektronika",
                "price" => "7399",
                "comment" => "Jako skup mobitel, ali dobar.",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 26
    [
        "_id" => $user_id_26,
        "username" => "matko_dj",
        "password_hash" => password_hash("matkosifra", PASSWORD_DEFAULT),
        "email" => "matko_dj@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 1,
        "name" => "Matko",
        "lastname" => "Matković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [
            [
                "product_id" => $product_id_26_1,
                "name" => "Laserworld CS-2000RGB",
                "description" => "Laserworld CS-2000RGB RGB laserski sistem sa potpunom izlaznom snagom do 2,000mW",
                "category" => "Elektronika",
                "price" => "8800.00"
            ],
            [
                "product_id" => $product_id_26_2,
                "name" => "Električna gitara",
                "description" => "Ibanez GRX40 BKN električna gitara. Solid body sa javorovim vratom i 22-fret rosewood fingerboardom s umetnutim točkama",
                "category" => "Elektronika",
                "price" => "1320.00"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_26_1,
                "user_id" => $user_id_24,
                "product_id" => $product_id_24_1,
                "name" => "Kurzweil PC3K8 Synthesizer",
                "description" => "Kurzweil PC3K8 sa 88 klavirskih tipki.  Revolucionarni novi PC3K, Kompatibilan s legendarnom K serijom",
                "category" => "Elektronika",
                "price" => "16985.60",
                "comment" => "Kvalitetan Synthesizer. Dobar zvuk.",
                "rating" => 4,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_25_2,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_2,
                "name" => "Apple Watch 6",
                "description" => "Apple Watch Series 6 Nikey",
                "category" => "Elektronika",
                "price" => "3499",
                "comment" => "Pouzdan sat. baterija drugo traje.",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 27
    [
        "_id" => $user_id_27,
        "username" => "ivica",
        "password_hash" => password_hash("ivicasifra", PASSWORD_DEFAULT),
        "email" => "ivica_vic@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Ivica",
        "lastname" => "Vicković",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_27_1,
                "name" => "Proteinski kruh",
                "description" => "Mestemacher Proteinski kruh 250 g",
                "category" => "Hrana",
                "price" => "19.99"
            ],
            [
                "product_id" => $product_id_27_2,
                "name" => "Burger",
                "description" => "PIK Američki burger 600 g",
                "category" => "Hrana",
                "price" => "24.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_26_1,
                "user_id" => $user_id_21,
                "product_id" => $product_id_21_1,
                "name" => "Pršut narezak",
                "description" => "Voštane Dalmatiko Pršut narezak 80 g",
                "category" => "Hrana",
                "price" => "17.99",
                "comment" => "Jako dobro. Preporucujem.",
                "rating" => 5,
                "quantity" => 4
            ],
            [
                "sale_id" => $sale_id_26_2,
                "user_id" => $user_id_21,
                "product_id" => $product_id_21_2,
                "name" => "Tilzit sir",
                "description" => "Tilzit polutvrdi sir narezani 1kg",
                "category" => "Hrana",
                "price" => "69.99",
                "comment" => "Ukusno.",
                "rating" => 4,
                "quantity" => 2
            ],
            [
                "sale_id" => $sale_id_26_3,
                "user_id" => $user_id_30,
                "product_id" => $product_id_30_3,
                "name" => "Bagremov med",
                "description" => "Bagremov med 900g",
                "category" => "Hrana",
                "price" => "70.00",
                "comment" => "Ovaj med je odlican. Preporučujem svima.",
                "rating" => 5,
                "quantity" => 6
            ]
        ]
    ],
    // USER 28
    [
        "_id" => $user_id_28,
        "username" => "lara",
        "password_hash" => password_hash("larasifra", PASSWORD_DEFAULT),
        "email" => "lara@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Lara",
        "lastname" => "Kokot",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_28_1,
                "name" => "Miris za auto",
                "description" => "Miris za auto - vanillia",
                "category" => "Automobili",
                "price" => "5.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_28_1,
                "user_id" => $user_id_18,
                "product_id" => $product_id_18_1,
                "name" => "VW Golf 7",
                "description" => "Volkswagen Golf MK 7 2.0 TDI",
                "category" => "Automobili",
                "price" => "115000",
                "comment" => "Auto je okretan i brz. Dobar izbor.",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 29
    [
        "_id" => $user_id_29,
        "username" => "max",
        "password_hash" => password_hash("maxsifra", PASSWORD_DEFAULT),
        "email" => "max@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Maksimilijan",
        "lastname" => "Maksimović",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            []
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_29_1,
                "user_id" => $user_id_9,
                "product_id" => $product_id_9_1,
                "name" => "Michelin Primacy 4 XL",
                "description" => "Gume Michelin Primacy 4 XL, 2020 NOVO 205/55/17",
                "category" => "Automobili",
                "price" => "660",
                "comment" => "Kvalitetne gume.",
                "rating" => 4,
                "quantity" => 1
            ],
            [
                "sale_id" => $sale_id_29_2,
                "user_id" => $user_id_22,
                "product_id" => $product_id_22_1,
                "name" => "Citroën C5",
                "description" => "Citroën C5 Aircross FEEL 1.5BlueHDI 130KS EAT8",
                "category" => "Automobili",
                "price" => "227000",
                "comment" => "Solidan auto.",
                "rating" => 4,
                "quantity" => 1
            ]
        ]
    ],
    // USER 30
    [
        "_id" => $user_id_30,
        "username" => "erina",
        "password_hash" => password_hash("erininasifra", PASSWORD_DEFAULT),
        "email" => "erina@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Erina",
        "lastname" => "Ernić",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pića"
        ],
        "products" => [
            [
                "product_id" => $product_id_30_1,
                "name" => "Sok od kadulje",
                "description" => "Domaći sok od cvijeta kadulje 1L.",
                "category" => "Pića",
                "price" => "20.99"
            ],
            [
                "product_id" => $product_id_30_2,
                "name" => "Liker od višnje",
                "description" => "Domaći liker od višnje maraske 1L.",
                "category" => "Pića",
                "price" => "45.00"
            ],
            [
                "product_id" => $product_id_30_3,
                "name" => "Bagremov med",
                "description" => "Bagremov med 900g",
                "category" => "Hrana",
                "price" => "70.00"
            ]
        ],
        "sales" => [
            [
                "sale_id" => $sale_id_30_1,
                "user_id" => $user_id_20,
                "product_id" => $product_id_20_2,
                "name" => "Pirovo integralno brašno",
                "description" => "Farina Pirovo integralno brašno 1000 g",
                "category" => "Hrana",
                "price" => "14.99",
                "comment" => "Dobro je.",
                "rating" => 3,
                "quantity" => 2
            ],
            [
                "sale_id" => $sale_id_30_2,
                "user_id" => $user_id_25,
                "product_id" => $product_id_25_3,
                "name" => "Domaći sok od jabuke",
                "description" => "Domaći sok od hladno prešane jabuke 1L",
                "category" => "Pića",
                "price" => "12.50",
                "comment" => "Jako dobro. Sviđa mi se.",
                "rating" => 5,
                "quantity" => 3
            ]
        ]
    ]
];
