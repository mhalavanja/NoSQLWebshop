<?php

    require_once 'vendor/autoload.php';
    
    use GraphAware\Neo4j\Client\ClientBuilder;
    
    $client = ClientBuilder::create()
        ->addConnection('default', 'http://neo4j:lozinka@localhost:7474') //upiši password za neo4j
        ->build();


    $result = $client->run('MATCH (n:Person) RETURN n.ime AS ime, n.prezime AS prezime');
    $records = $result->getRecords();

    echo 'Prije tratra: <br>'; 
    foreach($records as $record) {
        echo sprintf("%s, %s", $record->value('ime'),$record->value('prezime'));
        echo '<br>';
    }
    $username = "DArko";
    $name= "Darko";
    $lastname="Datric";
    $email = "darko@mail.com";


    $username1 = "MArko";
    $username2 = "DArko";

    //$result = $client->run('CREATE (u:User) SET u.username = $username, u.name = $name, u.lastname = $lastname, u.email = $email',['username'=>$username, 'name' =>$name, 'lastname'=>$lastname, 'email'=>$email]);

    //$result = $client->run('MATCH (u1:User {username : $username1}), (u2:User {username : $username2}) CREATE (u1)-[:RECOMEND]->(u2);', ['username1' => $username1, 'username2' => $username2]);
    //$result = $client->run('MATCH (u1:User {username : $username1}), (u2:User {username : $username2}) CREATE (u1)<-[:RECOMEND]-(u2);', ['username1' => $username1, 'username2' => $username2]);

    $result = $client->run('MATCH (n:User) RETURN n.username AS username, n.email AS email');
    $records = $result->getRecords();

    echo '<br>'; 
    foreach($records as $record) {
        echo sprintf("%s, %s", $record->value('username'),$record->value('email'));
        echo '<br>';
    }
?>
