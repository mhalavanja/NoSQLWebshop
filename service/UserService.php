<?php

use MongoDB\Driver\Query;

require_once __SITE_PATH . '/app/database/mongodb.class.php';
require_once __SITE_PATH . '/util/mongoToClassUtil.php';

class UserService
{
    static function saveUser($user)
    {

    }

    static function getUser($id)
    {

    }

    static function getUserByUsername($username)
    {
        $manager = mongoDB::getConnection();
        $filter = ["username" => $username];
        $query = new Query($filter, []);
        $rows = $manager->executeQuery('projekt.users', $query);
        $user = null;
        foreach ($rows as $row) {
            $document = json_decode(json_encode($row), true);
            $user = mongoToClass($document, new User());
//            echo '<pre>';
//            print_r($document);
//            echo '</pre>';
//            echo '<br>';
        }
        return $user;
    }

    static function getAllUsers()
    {

    }

    static function getRecommendationsForUser($userId)
    {

    }

    static function saveRecommendationForUser($recommendation, $userId)
    {

    }
}