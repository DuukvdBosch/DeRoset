<?php

include('employeenav.php');

require '0database.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM user WHERE id = :id");
$stmt->execute([':id' => $id]);
$order = $stmt->fetch(PDO::FETCH_ASSOC);
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
        <h1>User Information</h1>
            <table>
            <tr>
                <th>Voornaam</th>
                <td><?php echo $order['firstname']; ?></td>
            </tr>
            <tr>
                <th>Achternaam</th>
                <td><?php echo $order['lastname']; ?></td>
            </tr>
            <tr>
                <th>email</th>
                <td><?php echo $order['email']; ?></td>
            </tr>
            <tr>
                <th>Address</th>
                <td><?php echo $order['address']; ?></td>
            </tr>
            <tr>
                <th>Role</th>
                <td><?php echo $order['role']; ?></td>
            </tr>
        </table>
    </div>
</body>
</html>
