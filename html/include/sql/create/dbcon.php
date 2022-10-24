<?php
$serverName = 'localhost';
$userNameRoot = 'root';
$userPassword = '';
$dbName = 'results';

try {
    $connection = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName . '; charset=utf8', $userNameRoot, $userPassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "connection successfully";
} catch (PDOException $e) {
    echo "connection failed" . $e->getMessage();
}

$connection = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName . '; charset=utf8', $userNameRoot, $userPassword);
