<?php

require('0database.php');

$id = $_GET['id'];

$sql = "DELETE FROM order WHERE id = '$id'";
$def = "DELETE FROM order_content WHERE order_id = '$id'";

$stmt = $conn->prepare($sql);
        $stmt->execute();
$stmt = $conn->prepare($def);
        $stmt->execute();

header('Location: 2allorders.php');