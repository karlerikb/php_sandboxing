<?php

// Credentials
$host = "localhost";
$db = "my_first_database";
$port = 8889;

// Connection to db
$dsn = "mysql:host={$host};dbname={$db};port={$port}"; $username = "root"; $password = "root"; 
$con = new PDO($dsn, $username, $password); 


// Queries and statements
$query = "SELECT id, name, description, price FROM products WHERE id = ? LIMIT 0,1";

$stmt = $con->prepare($query);

$product_id = 1;
$stmt->bindParam(1, $product_id);
$stmt->execute();

$row = $stmt->fetch(PDO::FETCH_ASSOC);


echo "<div>Name: " . $row["name"] . "</div>";
echo "<div>Description: " . $row["description"] . "</div>";
echo "<div>Price: " . $row["price"] . "</div>";



?>