<?php

use MongoDB\Driver\Query;

require_once __SITE_PATH . '/app/database/mongodb.class.php';
require_once __SITE_PATH . '/util/mongoToClassUtil.php';

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
//            echo "<pre>";
//            print_r($document);
//            echo "</pre>";
//            return;
            $user = mongoToClass($document, new User());
        }
        return $user;
    }

    static function getAllUsers()
    {
        $manager = mongoDB::getConnection();
        $query = new Query([], []);
        $rows = $manager->executeQuery('projekt.users', $query);
        $userArray = [];
        foreach ($rows as $row) {
            $document = json_decode(json_encode($row), true);
            $userArray[] = mongoToClass($document, new User());
        }
        return $userArray;
    }

    static function getRecommendationsForUser($userId)
    {

    }

    static function saveUser($user)
    {
        UserService::saveUserMongoDB($user);
        UserService::saveUserNeo4J($user);
    }

    static function updateUser($user)
    {
        UserService::updateUserMongoDB($user);
        UserService::updateUserNeo4J($user);
    }

    static function saveRecommendationForUser($recommendation, $userId)
    {

    }

    private static function saveUserMongoDB($user){
        $bulk = new MongoDB\Driver\BulkWrite;
        $user->setId(new MongoDB\BSON\ObjectId);

        $bulk->insert($user->getFieldsForSave());
        $mongo = mongoDB::getConnection();

        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
        return $result;
    }

    private static function updateUserMongoDB($user){
        $bulk = new MongoDB\Driver\BulkWrite;
        $filter = ['_id' => new MongoDB\BSON\ObjectId($user->getId())];
        $newObj = ['$set' => $user->getFieldsForSave()];
        $bulk->update($filter, $newObj);
//        echo "<pre>";
//        print_r($product->getIterator());
//        echo "</pre>";
//        return;
        $mongo = mongoDB::getConnection();

        $result = $mongo->executeBulkWrite('projekt.users', $bulk);
//        echo "<pre>";
//        print_r($result);
//        echo "</pre>";
//        return;
        return $result;
    }

    private static function saveUserNeo4J($user)
    {

    }

    private static function updateUserNeo4J($user)
    {

    }
}