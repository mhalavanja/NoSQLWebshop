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
        saveUserMongoDB($user);
        saveUserNeo4J($user);
    }

    static function saveRecommendationForUser($recommendation, $userId)
    {

    }

    private function saveUserMongoDB($user){

    }
}