<?php
require '0database.php';
header('location:1overons.php');

$sql = "
  INSERT INTO bestelling (user_id, adress)
  VALUES (:user_id, :adress);

  SET @order_id = LAST_INSERT_ID();

  INSERT INTO bestelling_content (product_id, order_id)
  VALUES (:product_id_1, @order_id),
         (:product_id_2, @order_id);
";

$stmt = $conn->prepare($sql);


session_start();
$num_products_ordered = 0;
foreach ($_SESSION['cart'] as $product_id => $quantity) {
  $num_products_ordered += $quantity;
}

$data = [
  'user_id' => $_SESSION['user_id'],
  'adress' => $_POST['address'],
  'product_id_1' => array_key_exists(9, $_SESSION['cart']) ? $_SESSION['cart'][9] : 0,
  'product_id_2' => array_key_exists(4, $_SESSION['cart']) ? $_SESSION['cart'][4] : 0,
];

try {
  $stmt->execute($data);
  echo 'Form data successfully submitted! ';
  unset($session_data['cart']);
} catch (PDOException $e) {
  echo 'Error: ' . $e->getMessage();
}