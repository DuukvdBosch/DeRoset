<?php

include('employeenav.php');
require('0database.php');


$stmt = $conn->prepare("SELECT * FROM ice_cream");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>Ice Cream Flavors</title>
	<style>
		.ice-cream-grid {
			display: grid;
			grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
			grid-gap: 20px;
			align-items: center;
			justify-items: center;
		}
		
		.ice-cream-grid-item {
			display: flex;
			flex-direction: column;
			align-items: center;
			justify-content: space-between;
			padding: 20px;
			border: 1px solid #ccc;
			border-radius: 5px;
			box-shadow: 0 2px 4px rgba(0,0,0,.2);
			width: 255px;

		}
		
		.ice-cream-grid-item img {
			max-width: 100%;
			height: auto;
		}

        .gey{
            height: 40px;
            width: 100%;
            background-color: lightblue;
            border-radius: 10px;
        }
	</style>
</head>
<body>
    <br>
    <a href="2newflavor.php"><button class="gey">Maak een nieuwe smaak aan</button></a>
    <br><br>
	<div class="ice-cream-grid">
        <?php foreach($flavor as $flavor){?>
		<div class="ice-cream-grid-item">
			<h2><?php echo $flavor['name']; ?></h2>
			<h3><?php echo $flavor['brand']; ?></h3>
			<p><?php echo $flavor['description']; ?></p>
            <a href="2editproduct.php?id=<?php echo $flavor['id']; ?>"><button class="gey">Edit</button></a>
            <a href="0processdeletepro.php?id=<?php echo $flavor['id']; ?>"><button class="gey">Delete</button></a>
		</div>

        <?php } ?>
    </div>