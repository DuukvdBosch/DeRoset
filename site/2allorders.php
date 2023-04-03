<?php

include('employeenav.php');

require '0database.php';

$stmt = $conn->prepare("SELECT order.id, user.firstname, order.total_price, order.status, order.address as destination 
						FROM `order` 
						JOIN user 
						ON user.id = `order`.user_id");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();

?>

<!DOCTYPE html>
<html>
<head>
	<title>Orders</title>

    <link rel="stylesheet" href="css/allorders.css">
</head>
<body>
	<div class="container">
		<h1>Orders</h1>
		<table>
			<thead>
				<tr>
					<th>Order ID</th>
					<th>Klant Naam</th>
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
                        <td><?php echo $flavor['firstname'] ?></td>
                        <td><?php echo $flavor['destination'] ?></td>
                        <td><?php echo $flavor['total_price'] ?></td>
                        <td><?php echo $flavor['status'] ?></td>
                        <?php } ?>
					<td><a href="2order-details.php?id=<?php echo $flavor['id'] ?>"><button>Zie Details</button></a></td>
					<td><button>Verwijderen</button></td>
				</tr>
			</tbody>
		</table>
	</div>

	<!-- Use JavaScript to show a modal or page with the details of the order when the button is clicked -->
	
</body>
</html>
