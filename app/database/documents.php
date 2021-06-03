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

$documents = [
    // USER 1
    [
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "iPhone 11 Pro",
                "description" => "iPhone 11 Pro 64GB Space Grey",
                "category" => "Elektronika",
                "price" => "7399"
            ],
            [
                "product_id" => 2,
                "name" => "Apple Watch 6",
                "description" => "Apple Watch Series 6 Nikey",
                "category" => "Elektronika",
                "price" => "3499"
            ],
            [
                "product_id" => 3,
                "name" => "NeoFrost hladnjak",
                "description" => "Kombinirani hladnjak NeoFrost Dual Cooling",
                "category" => "Elektronika",
                "price" => "3199"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "toni",                         // user 3 mora imati ovaj prduct
                "product_id" => 2,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "Svinjski vrat",
                "description" => "PIK Svinjski vrat s kostima odrezak 640 g",
                "category" => "Hrana",
                "price" => "19,99"
            ],
            [
                "product_id" => 2,
                "name" => "Luk mladi",
                "description" => "Luk mladi vezica",
                "category" => "Hrana",
                "price" => "5,99"
            ],
            [
                "product_id" => 3,
                "name" => "Smart fortwo cdi",
                "description" => "SMART FOR TWO, DIESEL, PASSION OPREMA, SERVISNA KNJIGA",
                "category" => "Automobili",
                "price" => "36354"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "mirko",
                "product_id" => 1,
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
                "username" => "toni",
                "product_id" => 1,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "Istarski prsut",
                "description" => "Istarski suseni prsut u komadu",
                "category" => "Hrana",
                "price" => "170"
            ],
            [
                "product_id" => 2,
                "name" => "BMW 4 Gran Coupe",
                "description" => "BMW serija 4 Gran Coupe 418d Sport automatik,FULL,JAMSTVO 12MJESECI..",
                "category" => "Automobili",
                "price" => "170407"
            ],
            [
                "product_id" => 3,
                "name" => "Posip vino",
                "description" => "Vrhunsko bijelo vino Posip",
                "category" => "Pice",
                "price" => "14.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "maja",
                "product_id" => 2,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "ABSINTHE BOHEME",
                "description" => "ABSINTHE BOHEME BLUE RODNIK`S 0,7L -6/1- 70% ",
                "category" => "Pice",
                "price" => "99.90"
            ],
            [
                "product_id" => 2,
                "name" => "Ford Mondeo",
                "description" => "Ford Mondeo 1.5 TDCi Econetic Trend 2015",
                "category" => "Automobili",
                "price" => "92000"
            ],
            [
                "product_id" => 3,
                "name" => "Posip vino",
                "description" => "Vrhunsko bijelo vino Posip - Peljesac",
                "category" => "Pice",
                "price" => "17.99",
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "toni",
                "product_id" => 2,
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
                "username" => "pero",
                "product_id" => 1,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "Jack Daniels",
                "description" => "Jack Daniels 0,7L",
                "category" => "Pice",
                "price" => "156.99"
            ],
            [
                "product_id" => 2,
                "name" => "Sparoga 500g",
                "description" => "Sparoga 500g vezica. Proizvod s hrvatskih polja.",
                "category" => "Hrana",
                "price" => "14.99"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "toni",
                "product_id" => 1,
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
                "username" => "mico",
                "product_id" => 1,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "Apple Adapter",
                "description" => "Apple USB-C to USB Adapter",
                "category" => "Elektronika",
                "price" => "259"
            ],
            [
                "product_id" => 2,
                "name" => "Audi A3 1,6",
                "description" => "Audi A3 1,6 TDI LIMUZINA , AUDI SERVISNA , 59TKM, JAMSTVO 2 GOD",
                "category" => "Automobili",
                "price" => "128600"
            ],
            [
                "product_id" => 3,
                "name" => "Dunlop gume",
                "description" => "Ljetne gume Dunlop/ Zimske s čeličnim felgama",
                "category" => "Automobili",
                "price" => "600"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "toni",
                "product_id" => 2,
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
                "username" => "mirko123",
                "product_id" => 2,
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
        "products_owned" => [[]],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "alex22",
                "product_id" => 1,
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
                "username" => "mirko123",
                "product_id" => 2,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "Paski sir",
                "description" => "Paski sir okrugli 1kg od 100% ovcijeg mlijeka.",
                "category" => "Hrana",
                "price" => "240"
            ],
            [
                "product_id" => 2,
                "name" => "Kukuruzno brasno",
                "description" => "Grubo mljeveno kukuruzno brasno bez dodataka 1kg",
                "category" => "Hrana",
                "price" => "34.90"
            ],
            [
                "product_id" => 3,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "Michelin Primacy 4 XL",
                "description" => "Gume Michelin Primacy 4 XL, 2020 NOVO 205/55/17",
                "category" => "Automobili",
                "price" => "660"
            ],
            [
                "product_id" => 2,
                "name" => "Beko perilica",
                "description" => "Perilica posuđa. Kapacitet: 14 kompleta 6 programa pranja 5 temperatura pranja (35°/40°/50°/65°/70°)",
                "category" => "Elektronika",
                "price" => "2999"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "alex22",
                "product_id" => 3,
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
                "username" => "maja",
                "product_id" => 2,
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
        "products_owned" => [
            [
                "product_id" => 1,
                "name" => "Batat",
                "description" => "Ekozona batat ljubicasti 500g",
                "category" => "Hrana",
                "price" => "16.99"
            ],
            [
                "product_id" => 2,
                "name" => "Krumpiri mladi",
                "description" => "Mladi krumpir vreca 10kg - Varazdin",
                "category" => "Hrana",
                "price" => "28.50"
            ]
        ],
        "sales" => [
            [
                "sale_id" => 1,
                "username" => "mico",
                "product_id" => 2,
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
                "username" => "ana",
                "product_id" => 1,
                "name" => "Svinjski vrat",
                "description" => "PIK Svinjski vrat s kostima odrezak 640 g",
                "category" => "Hrana",
                "price" => "19,99",
                "comment" => "Solidno...",
                "rating" => 3,
                "quantity" => 3
            ]
        ]
    ]
];
