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

$userList = Array();

foreach ($documents as $document){
    $bulk->insert($document);
    $result = $client->run('CREATE (u:User) SET u.username = $username, u.name = $name, u.lastname = $lastname, u.email = $email',['username'=>$document['username'], 'name' =>$document['name'], 'lastname'=>$document['lastname'], 'email'=>$document['email']]);
    array_push($userList, $document['username']);
}
//Stvaranje inicijalnih preporuka
for( $i = 0; $i < 30; ++$i){
    $result = $client->run('MATCH (u1:User {username : $username1}), (u2:User {username : $username2}) CREATE (u1)-[:RECOMMEND]->(u2);', ['username1' => $userList[$i], 'username2' => $userList[($i+2)%30]]);
    $result = $client->run('MATCH (u1:User {username : $username1}), (u2:User {username : $username2}) CREATE (u1)<-[:RECOMMEND]-(u2);', ['username1' => $userList[$i], 'username2' => $userList[($i+3)%30]]);
}


$m->executeBulkWrite('projekt.users', $bulk);

echo "mongoDB projekt baza i Neo4j baza kreirana. Users collection inicijalizirana";
