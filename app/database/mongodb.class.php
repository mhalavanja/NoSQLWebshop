<?php

class mongoDB
{
    private static $manager = null;

    private function __construct()
    {

    }
    private function __clone()
    {

    }

    public static function getConnection()
    {
        if (mongoDB::$manager === null) {
            try {
                // Trenutno se spajamo na lokalnu mongo bazu
                mongoDB::$manager = new MongoDB\Driver\Manager("mongodb://localhost");
            } catch (PDOException $e) {
                exit('PDO Error: ' . $e->getMessage());
            }
        }
        return mongoDB::$manager;
    }
}
