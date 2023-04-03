<?php

require('0database.php');

 $name = $_POST['name'];
 $description = $_POST['description'];
 $brand = $_POST['brand'];
 $price = $_POST['price'];
 $image = $_POST['image'];

 $sql = "INSERT INTO ice_cream (name, description, brand, price, image) 
         VALUES ('$name', '$description', '$brand', '$price', '$image')";


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();

header('Location: 2products.php');