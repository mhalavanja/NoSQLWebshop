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

$user_id_2 = new MongoDB\BSON\ObjectId;
$product_id_2_1 = new MongoDB\BSON\ObjectId;
$product_id_2_2 = new MongoDB\BSON\ObjectId;
$product_id_2_3 = new MongoDB\BSON\ObjectId;

$user_id_3 = new MongoDB\BSON\ObjectId;
$product_id_3_1 = new MongoDB\BSON\ObjectId;
$product_id_3_2 = new MongoDB\BSON\ObjectId;
$product_id_3_3 = new MongoDB\BSON\ObjectId;

$user_id_4 = new MongoDB\BSON\ObjectId;
$product_id_4_1 = new MongoDB\BSON\ObjectId;
$product_id_4_2 = new MongoDB\BSON\ObjectId;
$product_id_4_3 = new MongoDB\BSON\ObjectId;

$user_id_5 = new MongoDB\BSON\ObjectId;
$product_id_5_1 = new MongoDB\BSON\ObjectId;
$product_id_5_2 = new MongoDB\BSON\ObjectId;
$product_id_5_3 = new MongoDB\BSON\ObjectId;

$user_id_6 = new MongoDB\BSON\ObjectId;
$product_id_6_1 = new MongoDB\BSON\ObjectId;
$product_id_6_2 = new MongoDB\BSON\ObjectId;
$product_id_6_3 = new MongoDB\BSON\ObjectId;

$user_id_7 = new MongoDB\BSON\ObjectId;
$product_id_7_1 = new MongoDB\BSON\ObjectId;
$product_id_7_2 = new MongoDB\BSON\ObjectId;
$product_id_7_3 = new MongoDB\BSON\ObjectId;

$user_id_8 = new MongoDB\BSON\ObjectId;
$product_id_8_1 = new MongoDB\BSON\ObjectId;
$product_id_8_2 = new MongoDB\BSON\ObjectId;
$product_id_8_3 = new MongoDB\BSON\ObjectId;

$user_id_9 = new MongoDB\BSON\ObjectId;
$product_id_9_1 = new MongoDB\BSON\ObjectId;
$product_id_9_2 = new MongoDB\BSON\ObjectId;
$product_id_9_3 = new MongoDB\BSON\ObjectId;

$user_id_10 = new MongoDB\BSON\ObjectId;
$product_id_10_1 = new MongoDB\BSON\ObjectId;
$product_id_10_2 = new MongoDB\BSON\ObjectId;
$product_id_10_3 = new MongoDB\BSON\ObjectId;

$user_id_11 = new MongoDB\BSON\ObjectId;
$product_id_11_1 = new MongoDB\BSON\ObjectId;
$product_id_11_2 = new MongoDB\BSON\ObjectId;
$product_id_11_3 = new MongoDB\BSON\ObjectId;

$user_id_12 = new MongoDB\BSON\ObjectId;
$product_id_12_1 = new MongoDB\BSON\ObjectId;
$product_id_12_2 = new MongoDB\BSON\ObjectId;
$product_id_12_3 = new MongoDB\BSON\ObjectId;

$user_id_13 = new MongoDB\BSON\ObjectId;
$product_id_13_1 = new MongoDB\BSON\ObjectId;
$product_id_13_2 = new MongoDB\BSON\ObjectId;
$product_id_13_3 = new MongoDB\BSON\ObjectId;

$user_id_14 = new MongoDB\BSON\ObjectId;
$product_id_14_1 = new MongoDB\BSON\ObjectId;
$product_id_14_2 = new MongoDB\BSON\ObjectId;
$product_id_14_3 = new MongoDB\BSON\ObjectId;

$user_id_15 = new MongoDB\BSON\ObjectId;
$product_id_15_1 = new MongoDB\BSON\ObjectId;
$product_id_15_2 = new MongoDB\BSON\ObjectId;
$product_id_15_3 = new MongoDB\BSON\ObjectId;

$user_id_16 = new MongoDB\BSON\ObjectId;
$product_id_16_1 = new MongoDB\BSON\ObjectId;
$product_id_16_2 = new MongoDB\BSON\ObjectId;
$product_id_16_3 = new MongoDB\BSON\ObjectId;

$user_id_17 = new MongoDB\BSON\ObjectId;
$product_id_17_1 = new MongoDB\BSON\ObjectId;
$product_id_17_2 = new MongoDB\BSON\ObjectId;
$product_id_17_3 = new MongoDB\BSON\ObjectId;

$user_id_18 = new MongoDB\BSON\ObjectId;
$product_id_18_1 = new MongoDB\BSON\ObjectId;
$product_id_18_2 = new MongoDB\BSON\ObjectId;
$product_id_18_3 = new MongoDB\BSON\ObjectId;

$user_id_19 = new MongoDB\BSON\ObjectId;
$product_id_19_1 = new MongoDB\BSON\ObjectId;
$product_id_19_2 = new MongoDB\BSON\ObjectId;
$product_id_19_3 = new MongoDB\BSON\ObjectId;

$user_id_20 = new MongoDB\BSON\ObjectId;
$product_id_20_1 = new MongoDB\BSON\ObjectId;
$product_id_20_2 = new MongoDB\BSON\ObjectId;
$product_id_20_3 = new MongoDB\BSON\ObjectId;

$user_id_21 = new MongoDB\BSON\ObjectId;
$product_id_21_1 = new MongoDB\BSON\ObjectId;
$product_id_21_2 = new MongoDB\BSON\ObjectId;
$product_id_21_3 = new MongoDB\BSON\ObjectId;

$user_id_22 = new MongoDB\BSON\ObjectId;
$product_id_22_1 = new MongoDB\BSON\ObjectId;
$product_id_22_2 = new MongoDB\BSON\ObjectId;
$product_id_22_3 = new MongoDB\BSON\ObjectId;

$user_id_23 = new MongoDB\BSON\ObjectId;
$product_id_23_1 = new MongoDB\BSON\ObjectId;
$product_id_23_2 = new MongoDB\BSON\ObjectId;
$product_id_23_3 = new MongoDB\BSON\ObjectId;

$user_id_24 = new MongoDB\BSON\ObjectId;
$product_id_24_1 = new MongoDB\BSON\ObjectId;
$product_id_24_2 = new MongoDB\BSON\ObjectId;
$product_id_24_3 = new MongoDB\BSON\ObjectId;

$user_id_25 = new MongoDB\BSON\ObjectId;
$product_id_25_1 = new MongoDB\BSON\ObjectId;
$product_id_25_2 = new MongoDB\BSON\ObjectId;
$product_id_25_3 = new MongoDB\BSON\ObjectId;

$user_id_26 = new MongoDB\BSON\ObjectId;
$product_id_26_1 = new MongoDB\BSON\ObjectId;
$product_id_26_2 = new MongoDB\BSON\ObjectId;
$product_id_26_3 = new MongoDB\BSON\ObjectId;

$user_id_27 = new MongoDB\BSON\ObjectId;
$product_id_27_1 = new MongoDB\BSON\ObjectId;
$product_id_27_2 = new MongoDB\BSON\ObjectId;
$product_id_27_3 = new MongoDB\BSON\ObjectId;

$user_id_28 = new MongoDB\BSON\ObjectId;
$product_id_28_1 = new MongoDB\BSON\ObjectId;
$product_id_28_2 = new MongoDB\BSON\ObjectId;
$product_id_28_3 = new MongoDB\BSON\ObjectId;

$user_id_29 = new MongoDB\BSON\ObjectId;
$product_id_29_1 = new MongoDB\BSON\ObjectId;
$product_id_29_2 = new MongoDB\BSON\ObjectId;
$product_id_29_3 = new MongoDB\BSON\ObjectId;

$user_id_30 = new MongoDB\BSON\ObjectId;
$product_id_30_1 = new MongoDB\BSON\ObjectId;
$product_id_30_2 = new MongoDB\BSON\ObjectId;
$product_id_30_3 = new MongoDB\BSON\ObjectId;


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
        "lastname" => "Mirkovic",
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
                "sale_id" => 1,
                "user_id" => $user_id_3,                         // user 3 mora imati ovaj prduct
                "product_id" => $product_id_3_2,
                "name" => "Posip vino",
                "description" => "Vrhunsko bijelo vino Posip",
                "category" => "Pice",
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
        "lastname" => "Anic",
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
                "price" => "19,99"
            ],
            [
                "product_id" => $product_id_2_2,
                "name" => "Luk mladi",
                "description" => "Luk mladi vezica",
                "category" => "Hrana",
                "price" => "5,99"
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
                "sale_id" => 1,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_1,
                "name" => "iPhone 11 Pro",
                "description" => "iPhone 11 Pro 64GB Space Grey",
                "category" => "Elektronika",
                "price" => "7399",
                "comment" => "Zadovoljna sam s mobitelom. Odlicna kamera.",
                "rating" => 4,
                "quantity" => 1
            ],
            [
                "sale_id" => 2,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_1,
                "name" => "Istarski prsut",
                "description" => "Istarski suseni prsut u komadu",
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
        "lastname" => "Tomic",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Automobili"
        ],
        "products" => [
            [
                "product_id" => $product_id_3_1,
                "name" => "Istarski prsut",
                "description" => "Istarski suseni prsut u komadu",
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
                "name" => "Posip vino",
                "description" => "Vrhunsko bijelo vino Posip",
                "category" => "Pice",
                "price" => "14.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
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
        "lastname" => "Majic",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pice"
        ],
        "products" => [
            [
                "product_id" => $product_id_4_1,
                "name" => "ABSINTHE BOHEME",
                "description" => "ABSINTHE BOHEME BLUE RODNIK`S 0,7L -6/1- 70% ",
                "category" => "Pice",
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
                "name" => "Posip vino",
                "description" => "Vrhunsko bijelo vino Posip - Peljesac",
                "category" => "Pice",
                "price" => "17.99",
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_2,
                "name" => "Posip vino",
                "description" => "Vrhunsko bijelo vino Posip",
                "category" => "Pice",
                "price" => "14.99",
                "comment" => "Super.",
                "rating" => 5,
                "quantity" => 1
            ],
            [
                "sale_id" => 1,
                "user_id" => $user_id_5,
                "product_id" => $product_id_5_1,
                "name" => "Jack Daniels",
                "description" => "Jack Daniels 0,7L",
                "category" => "Pice",
                "price" => "156.99",
                "comment" => "Nije los, preporucujem.",
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
        "lastname" => "Peric",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_5_1,
                "name" => "Jack Daniels",
                "description" => "Jack Daniels 0,7L",
                "category" => "Pice",
                "price" => "156.99"
            ],
            [
                "product_id" => $product_id_5_2,
                "name" => "Sparoga 500g",
                "description" => "Sparoga 500g vezica. Proizvod s hrvatskih polja.",
                "category" => "Hrana",
                "price" => "14.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_1,
                "name" => "Istarski prsut",
                "description" => "Istarski suseni prsut u komadu",
                "category" => "Hrana",
                "price" => "170",
                "comment" => "Najbolji prsut koji sam ikad probao!!",
                "rating" => 5,
                "quantity" => 5
            ],
            [
                "sale_id" => 2,
                "user_id" => $user_id_8,
                "product_id" => $product_id_8_1,
                "name" => "Paski sir",
                "description" => "Paski sir okrugli 1kg od 100% ovcijeg mlijeka.",
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
        "lastname" => "Aleksic",
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
                "sale_id" => 1,
                "user_id" => $user_id_3,
                "product_id" => $product_id_3_2,
                "name" => "BMW 4 Gran Coupe",
                "description" => "BMW serija 4 Gran Coupe 418d Sport automatik,FULL,JAMSTVO 12MJESECI..",
                "category" => "Automobili",
                "price" => "170407",
                "comment" => "Razocaravajuce.",
                "rating" => 1,
                "quantity" => 1
            ],
            [
                "sale_id" => 2,
                "user_id" => $user_id_1,
                "product_id" => $product_id_1_2,
                "name" => "Apple Watch 6",
                "description" => "Apple Watch Series 6 Nikey",
                "category" => "Elektronika",
                "price" => "3499",
                "comment" => "Nisam oduseljena ovim satom. Mislim da mora biti bolje za ovu cijenu.",
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
        "lastname" => "Ivosevic",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Elektronika"
        ],
        "products" => [[]],
        "sales" => [
            [
                "sale_id" => 1,
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
                "sale_id" => 2,
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
        "username" => "mico",
        "password_hash" => password_hash("micinasifra", PASSWORD_DEFAULT),
        "email" => "mico23zg@net.hr",
        "registration_sequence" => generateRandomString(10),
        "has_registered" => 1,
        "is_admin" => 0,
        "name" => "Miljenko",
        "lastname" => "Milic",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_8_1,
                "name" => "Paski sir",
                "description" => "Paski sir okrugli 1kg od 100% ovcijeg mlijeka.",
                "category" => "Hrana",
                "price" => "240"
            ],
            [
                "product_id" => $product_id_8_2,
                "name" => "Kukuruzno brasno",
                "description" => "Grubo mljeveno kukuruzno brasno bez dodataka 1kg",
                "category" => "Hrana",
                "price" => "34.90"
            ],
            [
                "product_id" => $product_id_8_3,
                "name" => "Krumpiri mladi",
                "description" => "Mladi krumpir vreca 10kg - Varazdin",
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
        "lastname" => "Monkovic",
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
                "sale_id" => 1,
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
                "sale_id" => 2,
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
        "lastname" => "Martic",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Hrana"
        ],
        "products" => [
            [
                "product_id" => $product_id_10_1,
                "name" => "Batat",
                "description" => "Ekozona batat ljubicasti 500g",
                "category" => "Hrana",
                "price" => "16.99"
            ],
            [
                "product_id" => $product_id_10_2,
                "name" => "Krumpiri mladi",
                "description" => "Mladi krumpir vreca 10kg - Varazdin",
                "category" => "Hrana",
                "price" => "28.50"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "user_id" => $user_id_8,
                "product_id" => $product_id_8_2,
                "name" => "Kukuruzno brasno",
                "description" => "Grubo mljeveno kukuruzno brasno bez dodataka 1kg",
                "category" => "Hrana",
                "price" => "34.90",
                "comment" => "Super. Odlican je kruh od ovog brasna.",
                "rating" => 5,
                "quantity" => 7
            ],
            [
                "sale_id" => 2,
                "user_id" => $user_id_2,
                "product_id" => $product_id_2_1,
                "name" => "Svinjski vrat",
                "description" => "PIK Svinjski vrat s kostima odrezak 640 g",
                "category" => "Hrana",
                "price" => "19,99",
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
        "is_admin" => 1,
        "name" => "Vinko",
        "lastname" => "Vinkovic",
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
                "sale_id" => 1,
                "user_id" => $user_id_14,
                "product_id" => $product_id_14_2,
                "name" => "USB Kabel",
                "description" => "USB kabel 2m crni",
                "category" => "Elektronika",
                "price" => "30.90",
                "comment" => "Super. Odlican kabel. Punjenje nije sporo.",
                "rating" => 5,
                "quantity" => 1
            ],
            [
                "sale_id" => 2,
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
                "sale_id" => 1,
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
                "description" => "Mijesane zobene pahuljice.",
                "category" => "Hrana",
                "price" => "27.50"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "user_id" => $user_id_14,
                "product_id" => $product_id_14_1,
                "name" => "Mobitel Samsung A52",
                "description" => "Samsung A52 Galaxy mobitel - crni 2021",
                "category" => "Elektronika",
                "price" => "4350",
                "comment" => "Razocaravajuce. Ocekivala sam bolje.",
                "rating" => 2,
                "quantity" => 1
            ],
            [
                "sale_id" => 2,
                "user_id" => $user_id_10,
                "product_id" => $product_id_10_1,
                "name" => "Batat",
                "description" => "Ekozona batat ljubicasti 500g",
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
        "is_admin" => 1,
        "name" => "Ivan",
        "lastname" => "Ivankovic",
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
                "sale_id" => 1,
                "user_id" => $user_id_9,
                "product_id" => $product_id_9_2,
                "name" => "Beko perilica",
                "description" => "Perilica posuđa. Kapacitet: 14 kompleta 6 programa pranja 5 temperatura pranja (35°/40°/50°/65°/70°)",
                "category" => "Elektronika",
                "price" => "2999",
                "comment" => "Perilica odlicno sluzi. Opet bih kupio.",
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
        "is_admin" => 1,
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
                "description" => "Avokado vreca - 2kg",
                "category" => "Hrana",
                "price" => "99.90"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "user_id" => $user_id_13,
                "product_id" => $product_id_13_1,
                "name" => "Rotkvice",
                "description" => "Rotkvice mlade, vezica 500g",
                "category" => "Hrana",
                "price" => "21.99",
                "comment" => "Odlicno, svjeze. Pohvale",
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
        "is_admin" => 1,
        "name" => "Martin",
        "lastname" => "Martinovic",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pica"
        ],
        "products" => [
            [
                "product_id" => $product_id_16_1,
                "name" => "Domaca medica",
                "description" => "Domaca medica 35%vol 1L",
                "category" => "Pica",
                "price" => "69.90"
            ],
            [
                "product_id" => $product_id_16_2,
                "name" => "Domaca travarica",
                "description" => "Domaca travarica 42%vol 1L",
                "category" => "Pica",
                "price" => "89.90"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "user_id" => $user_id_4,
                "product_id" => $product_id_4_1,
                "name" => "ABSINTHE BOHEME",
                "description" => "ABSINTHE BOHEME BLUE RODNIK`S 0,7L -6/1- 70% ",
                "category" => "Pice",
                "price" => "99.90",
                "comment" => "Uuu.. :)",
                "rating" => 4,
                "quantity" => 2
            ],
            [
                "sale_id" => 2,
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
        "is_admin" => 1,
        "name" => "Mia",
        "lastname" => "Mijic",
        "favorite_categories" => [
            "category_id" => 1,
            "category" => "Pica"
        ],
        "products" => [
            []
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "user_id" => $user_id_4,
                "product_id" => $product_id_4_1,
                "name" => "ABSINTHE BOHEME",
                "description" => "ABSINTHE BOHEME BLUE RODNIK`S 0,7L -6/1- 70% ",
                "category" => "Pice",
                "price" => "99.90",
                "comment" => "Ultra jako pice",
                "rating" => 2,
                "quantity" => 1
            ],
            [
                "sale_id" => 2,
                "user_id" => $user_id_15,
                "product_id" => $product_id_15_1,
                "name" => "Avokado",
                "description" => "Avokado vreca - 2kg",
                "category" => "Hrana",
                "price" => "99.90",
                "comment" => "Avokado je bio svjez i ukusan.",
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
        "is_admin" => 1,
        "name" => "Marko",
        "lastname" => "Markovic",
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
                "sale_id" => 1,
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
                "sale_id" => 2,
                "user_id" => $user_id_12,
                "product_id" => $product_id_12_3,
                "name" => "Dell Laptop e7240",
                "description" => "Dell Laptop e7240 SSD 512GB 16GB RAM",
                "category" => "Elektronika",
                "price" => "8700",
                "comment" => "Laptop se stalno gasi. Jako lose. Preskocite ovaj oglas.",
                "rating" => 2,
                "quantity" => 1
            ]
        ]
    ]
];
