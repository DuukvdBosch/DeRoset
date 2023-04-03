<?php

include('employeenav.php');

require '0database.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT `status` FROM `order` WHERE `order`.id = :id;");
$stmt->bindParam(":id", $id);
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$order = $stmt->fetchAll(); 

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

      <select name="status" id="status">
        <?php foreach($order as $order){ ?>
        <option value="<?php echo $order['status']; ?>"><?php echo $order['status']; ?></option>
        <?php } ?>
      </select>

  </body>
</html>
