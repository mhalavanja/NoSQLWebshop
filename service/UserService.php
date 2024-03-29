<?php

use MongoDB\Driver\Query;

require_once __SITE_PATH . '/app/database/mongodb.class.php';
require_once __SITE_PATH . '/util/mongoToClassUtil.php';
require_once __SITE_PATH . '/vendor/autoload.php';

use GraphAware\Neo4j\Client\ClientBuilder;


class UserService
{
    static function getUserByProperty($property, $registrationSequence)
    {
        $manager = mongoDB::getConnection();
        $filter = [$property => $registrationSequence];
        $query = new Query($filter, []);
        $rows = $manager->executeQuery('projekt.users', $query);
        $user = null;
        foreach ($rows as $row) {
            $document = json_decode(json_encode($row), true);
            $user = mongoToClass($document, new User());
        }
        return $user;
    }

    static function getAllUsernames()
    {
        $client = ClientBuilder::create()
            ->addConnection('default', 'http://neo4j:lozinka@localhost:7474')
            ->build();
        $result = $client->run('MATCH (u:User) RETURN u.username AS username');
        $records = $result->getRecords();
        $usernameList = array();
        foreach ($records as $record) {
            array_push($usernameList, $record->value('username'));
        }
        return $usernameList;
    }

    static function getRecommendationsForUser($username)
    {
        $client = ClientBuilder::create()
            ->addConnection('default', 'http://neo4j:lozinka@localhost:7474')
            ->build();
        $result = $client->run('MATCH (u1:User {username : $username})-[:RECOMMEND]->(u2:User) RETURN u2.username AS username', ['username' => $username]);
        $records = $result->getRecords();
        $usernameList = array();
        foreach ($records as $record) {
            array_push($usernameList, $record->value('username'));
        }
        return $usernameList;
    }

    static function saveUser($user)
    {
        UserService::saveUserMongoDB($user);
        UserService::saveUserNeo4J($user);
    }

    static function updateUser($user, $oldUsername)
    {
        UserService::updateUserMongoDB($user);
        UserService::updateUserNeo4J($user, $oldUsername);
    }

    static function saveRecommendationForUser($recommendationUsername, $user)
    {
        if ($recommendationUsername === $user->getUsername()) return null;
        $client = ClientBuilder::create()
            ->addConnection('default', 'http://neo4j:lozinka@localhost:7474')
            ->build();
        $result = $client->run('MATCH (u1:User {username : $username1}), (u2:User {username : $username2}) MERGE (u1)-[:RECOMMEND]->(u2);', ['username1' => $user->getUsername(), 'username2' => $recommendationUsername]);
        return $result;
    }

    private static function saveUserMongoDB($user)
    {
        $bulk = new MongoDB\Driver\BulkWrite;
        $user->setId(new MongoDB\BSON\ObjectId);

        $bulk->insert($user->getFieldsForSave());
        $mongo = mongoDB::getConnection();

        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
        return $result;
    }

    private static function updateUserMongoDB($user)
    {
        $mongo = mongoDB::getConnection();
        $bulk = new MongoDB\Driver\BulkWrite;
        $filter = ['_id' => new MongoDB\BSON\ObjectId($user->getId())];
        $newObj = ['$set' => $user->getFieldsForUpdate()];

        $bulk->update($filter, $newObj);
        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
        return $result;
    }

    private static function saveUserNeo4J($user)
    {
        $client = ClientBuilder::create()
            ->addConnection('default', 'http://neo4j:lozinka@localhost:7474')
            ->build();
        $result = $client->run('MERGE (u:User{username : $username, email : $email}) RETURN u', ['username' => $user->getUsername(), 'email' => $user->getemail()]);
        return $result;
    }

    private static function updateUserNeo4J($user, $oldUsername)
    {
        $client = ClientBuilder::create()
            ->addConnection('default', 'http://neo4j:lozinka@localhost:7474')
            ->build();
        $result = $client->run('MATCH (u:User{username : $oldusername}) SET u.username = $username, u.name = $name, u.lastname = $lastname, u.email = $email', ['oldusername' => $oldUsername, 'username' => $user->getUsername(), 'name' => $user->getName(), 'lastname' => $user->getLastname(), 'email' => $user->getemail()]);
        return $result;
    }
}