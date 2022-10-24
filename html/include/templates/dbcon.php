<?php
$serverName = 'localhost';
$userNameRoot = 'root';
$userPassword = '';
$dbName = 'results';

try {
    $connection = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName . '; charset=utf8', $userNameRoot, $userPassword);
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    echo "";
} catch (PDOException $e) {
    echo "" . $e->getMessage();
}

$connection = new PDO('mysql:host=' . $serverName . ';dbname=' . $dbName . '; charset=utf8', $userNameRoot, $userPassword);
