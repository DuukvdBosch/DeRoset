<?php

require('0database.php');

$id = $_GET['id'];

$sql = "DELETE FROM ice_cream WHERE id = $id";

$stmt = $conn->prepare($sql);
        $stmt->execute();

header('Location: 2products.php');