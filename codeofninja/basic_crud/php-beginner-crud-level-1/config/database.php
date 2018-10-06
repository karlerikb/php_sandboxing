<?php

$host = "localhost";
$db = "php_beginner_crud_level_1";
$port = 8889;
$username = "root";
$password = "root";

$dsn = "mysql:host={$host};dbname={$db};port={$port}";


try {
    $con = new PDO($dsn, $username, $password);
} catch(PDOException $exception) {
    echo "Connection error: " . $exception->getMessage();
}