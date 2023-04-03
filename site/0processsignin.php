<?php

require('0database.php');

 $firstname = $_POST['firstname'];
 $lastname = $_POST['lastname'];
 $email = $_POST['email'];
 $address = $_POST['address'];
 $password = $_POST['password'];

 $sql = "INSERT INTO user (firstname, lastname, password, email, address) 
         VALUES ('$firstname', '$lastname', '$password', '$email', '$address')";


$stmt = $conn->prepare($sql);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();

header('Location: 1login.php');