<?php

require('0database.php');

$id = $_GET['id'];

$sql = "DELETE FROM user WHERE id = $id";

$stmt = $conn->prepare($sql);
        $stmt->execute();

header('Location: 2users.php');