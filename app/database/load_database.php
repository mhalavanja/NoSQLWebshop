<?php
require_once __DIR__ . '/mongodb.class.php';
require_once __DIR__ . '/documents.php';
require_once '../../vendor/autoload.php';
    
use GraphAware\Neo4j\Client\ClientBuilder;
//Neo4j Client
$client = ClientBuilder::create()
    ->addConnection('default', 'http://neo4j:lozinka@localhost:7474') //upiši password za neo4j
    ->build();

// Manager Class
$m = mongoDB::getConnection();


$bulk = new MongoDB\Driver\BulkWrite;

foreach ($documents as $document){
    $bulk->insert($document);
    $result = $client->run('CREATE (u:User) SET u.username = $username, u.name = $name, u.lastname = $lastname, u.email = $email',['username'=>$document['username'], 'name' =>$document['name'], 'lastname'=>$document['lastname'], 'email'=>$document['email']]);
}

$m->executeBulkWrite('projekt.users', $bulk);

echo "mongoDB projekt baza i Neo4j baza kreirana. Users collection inicijalizirana";
