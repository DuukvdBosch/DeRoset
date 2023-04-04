<?php

include('side-info.php');

require '0database.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT `order`.id, user.firstname, `order`.address, ice_cream.name, ice_cream.price, order.total_price, order_content.amount, order.status
						FROM `order` 
						JOIN user
						ON user.id = `order`.user_id 
						JOIN order_content
						ON order_content.order_id = `order`.id 
						JOIN ice_cream 
						ON ice_cream.id = order_content.ice_cream_id
						WHERE `order`.id = :id;");
$stmt->bindParam(":id", $id);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$order = $stmt->fetch();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Order Information</title>
    <style>
      /* CSS styling for the page */
      body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
      }
      .container {
        max-width: 800px;
        margin: 0 auto;
        padding: 20px;
      }
      h1 {
        text-align: center;
        margin-bottom: 20px;
      }
      table {
        border-collapse: collapse;
        width: 100%;
      }
      th, td {
        padding: 10px;
        text-align: left;
        border-bottom: 1px solid #ddd;
      }
      th {
        background-color: #f2f2f2;
      }
	  
      .button {
        display: inline-block;
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        text-align: center;
        text-decoration: none;
        border-radius: 5px;
        margin-top: 20px;
      }

	  
    </style>
  </head>
  <body>
    <div class="container">
      <h1>Order Information</h1>
      <table>
        <tr>
          <th>Order Number</th>
          <td><?php echo $order['id']; ?></td>
        </tr>
        <tr>
          <th>Customer Name</th>
          <td><?php echo $order['firstname']; ?></td>
        </tr>
        <tr>
          <th>Shipping Address</th>
          <td><?php echo $order['address']; ?></td>
        </tr>
        <tr>
          <th>Payment Method</th>
          <td>Visa ending in 1234</td>
        </tr>
        <tr>
          <th>Items</th>
			<td>
				<ul>
					<?php
					// Assume $stmt is a PDO statement object that has been executed
					// and contains multiple rows of data
						echo $order["name"] . " - ";
						echo $order["price"] . " - ";
						echo $order["amount"] . "<br>";
					while ($row = $stmt->fetch()) {
						// Output the data for each row
						echo $row["name"] . " - ";
						echo $row["price"] . " - ";
						echo $row["amount"] . "<br>";
						// Add any other fields as needed
					}

					?>
				</ul>
			</td>
        </tr>
        <tr>
          <th>Order Total</th>
          <td><?php echo $order['total_price']; ?></td>
        </tr>
        <tr>
          <th>Status</th>
          <td><?php echo $order['status']; ?></td>
        </tr>
      </table>
      <a href="#" class="button">Print Order</a>
    </div>
  </body>
</html>
