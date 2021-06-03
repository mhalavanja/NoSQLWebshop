<?php
require_once __DIR__ . '/mongodb.class.php';
require_once __DIR__ . '/documents.php';

// Manager Class
$m = mongoDB::getConnection();


$bulk = new MongoDB\Driver\BulkWrite;

foreach ($documents as $document)
    $bulk->insert($document);

$m->executeBulkWrite('projekt.users', $bulk);

echo "mongoDB projekt baza kreirana. users collection inicijalizirana";
