<?php

include('side-info.php');

require '0database.php';

$id = $_SESSION['user_id'];

$stmt = $conn->prepare("SELECT * FROM `order` WHERE user_id = '$id'");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Orders</title>

    <link rel="stylesheet" href="css/allorders.css">
</head>
<body>
	<div class="container">
		<h1>Orders</h1>
		<table>
			<thead>
				<tr>
					<th>Order ID</th>
					<th>Adres</th>
					<th>Totale Prijs</th>
					<th>Status</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<!-- Use JavaScript to loop through orders and add each one as a row to the table -->
				<tr>
                    <?php foreach($flavor as $flavor){ ?>
                        <td><?php echo $flavor['id'] ?></td>
                        <td><?php echo $flavor['address'] ?></td>
                        <td><?php echo $flavor['total_price'] ?></td>
                        <td><?php echo $flavor['status'] ?></td>
                        <?php } ?>
					<td><a href="1order-details.php?id=<?php echo $flavor['id'] ?>"><button>Zie Details</button></a></td>
					<td><a href="0processdelorder.php?id=<?php echo $flavor['id'] ?>"><button>Verwijderen</button></a></td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Use JavaScript to show a modal or page with the details of the order when the button is clicked -->
	
</body>
</html>
