<?php

require('0database.php');

session_start();

$id = $_SESSION['user_id'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$address = $_POST['address'];
$password = $_POST['password'];

if(isset($firstname) && !empty($firstname)){
    
    if(strlen($firstname) >= 2 && !is_numeric($firstname)){

        $stmt = $conn->prepare("UPDATE user SET firstname = :forname, lastname = :surname, email = :mail, address = :adres, password = :password WHERE id = :id");
        $stmt->bindParam(":id", $id);
        $stmt->bindParam(":forname", $firstname);
        $stmt->bindParam(":surname", $lastname);
        $stmt->bindParam(":mail", $email);
        $stmt->bindParam(":adres", $address);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        if ($_SESSION['role'] == 'employee') {
            header('Location: 2employprofile.php');
        }
        if ($_SESSION['role'] == 'customer') {
            header('Location: 1profile.php');
        }


    }else{
        header('Location: actionfailed.php');
    }

}