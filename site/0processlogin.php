<?php

require '0database.php';

 $email = $_POST['email'];
 $password = $_POST['password'];

 

$stmt = $conn->prepare("SELECT * FROM user WHERE email = '$email' AND password = '$password'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$user = $stmt->fetch();

$rowCount = $stmt->rowCount();
if ($rowCount == 0) {
    header('Location: actionfailed.php');
} else {
    session_start();
    $_SESSION['logedin'] = true;
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['email'] = $user['email'];
    $_SESSION['firstname'] = $user['firstname']; 
    $_SESSION['lastname'] = $user['lastname'];
    $_SESSION['address'] = $user['address'];
    $_SESSION['password'] = $user['password'];
    $_SESSION['role'] = $user['role'];

    if ($_SESSION['role'] == 'employee') {
        header('Location: employeedash.php');
    }
    if ($_SESSION['role'] == 'customer') {
        header('Location: 1bestellen.php');
    }
}