<?php

require('0database.php');

session_start();

$id = $_GET['id'];
$name = $_POST['name'];
$description = $_POST['description'];
$brand = $_POST['brand'];
$price = $_POST['price'];
$image = $_POST['image'];

if(isset($name) && !empty($name)){
    
    if(strlen($name) >= 2 && !is_numeric($name)){

        $stmt = $conn->prepare("UPDATE ice_cream SET name = :name, description = :description, brand = :brand, price = :price, image = :image WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":name", $name);
        $stmt->bindParam(":description", $description);
        $stmt->bindParam(":brand", $brand);
        $stmt->bindParam(":price", $price);
        $stmt->bindParam(":image", $image);
        $stmt->execute();

        header('Location: 2products.php');
       
    }else{
        header('Location: actionfailed.php');
    }

}