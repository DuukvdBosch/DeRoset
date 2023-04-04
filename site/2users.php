<?php

include('employeenav.php');

require '0database.php';

$stmt = $conn->prepare("SELECT * FROM `user`");
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
		<h1>User</h1>
		<table>
			<thead>
				<tr>
					<th>Id</th>
					<th>Voornaam</th>
					<th>Achternaam</th>
					<th>Address</th>
					<th>Role</th>
					<th></th>
					<th></th>
				</tr>
			</thead>
			<tbody>
				<!-- Use JavaScript to loop through orders and add each one as a row to the table -->
                <?php foreach($flavor as $flavor){ ?>
				<tr>
                    
                        <td><?php echo $flavor['id'] ?></td>
                        <td><?php echo $flavor['firstname'] ?></td>
                        <td><?php echo $flavor['lastname'] ?></td>
                        <td><?php echo $flavor['address'] ?></td>
                        <td><?php echo $flavor['role'] ?></td>
                        
					<td><a href="2user-details.php?id=<?php echo $flavor['id'] ?>"><button>Details</button></a></td>
					<td><a href="0processdeluser.php?id=<?php echo $flavor['id'] ?>"><button>Verwijderen</button></a></td>
				</tr>
                <?php } ?>
			</tbody>
		</table>
	</div>

	<!-- Use JavaScript to show a modal or page with the details of the order when the button is clicked -->
	
</body>
</html>
