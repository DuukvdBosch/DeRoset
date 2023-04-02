<?php

require '0database.php';



$sql = "SELECT * FROM ice_cream";

$stmt = $conn->prepare($sql);
$stmt->execute();

// set the resulting array to associative
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavours = $stmt->fetchAll();

?>

<html>
<head>

<link rel="stylesheet" href="style.css">

</head>

<body>

<div class="itema">
Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test Test
</div>
    
    <!-- <?php foreach($flavours as $flavour){ ?>
        <tr>
            <td><?php echo $flavour['id'] ?></td>. 
            <td><?php echo $flavour['name'] ?></td> - 
            <td><?php echo $flavour['description'] ?></td> - 
            <td><?php echo $flavour['brand'] ?></td> - $
            <td><?php echo $flavour['price'] ?></td><br>

        </tr>
    <?php } ?> -->

    

</body>
</html>