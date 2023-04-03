<?php
@session_start();
require '0database.php';
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = array();
}

if (isset($_POST['id'])) {
    $id = $_POST['id'];
    $quantity = 1;

    if (isset($_POST['quantity'])) {
        $quantity = $_POST['quantity'];
    }

    if (isset($_POST['remove'])) {
        unset($_SESSION['cart'][$id]);
    } else {
        if (isset($_SESSION['cart'][$id])) {
            $_SESSION['cart'][$id] += $quantity;
        } else {
            $_SESSION['cart'][$id] = $quantity;
        }
    }
}

?>
    <h2>Your Shopping Cart</h2>
    <table>
        <thead>
            <tr>
                <th>Item</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Total</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($_SESSION['cart'] as $id => $quantity) {
                // Retrieve the item from the database using the $id
                $stmt = $conn->prepare("SELECT * FROM ice_cream WHERE id = ?");
                $stmt->execute([$id]);
                $item = $stmt->fetch(PDO::FETCH_ASSOC);

                // Calculate the total price for this item
                $total_price = $item['price'] * $quantity;
            ?>
                <tr>
                    <td><?php echo $item['name']; ?></td>
                    <td><?php echo $quantity; ?></td>
                    <td>$<?php echo $item['price']; ?></td>
                    <td>$<?php echo $total_price; ?></td>
                    <td>
                        <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                            <input type="hidden" name="id" value="<?php echo $id; ?>">
                            <input type="hidden" name="remove" value="1">
                            <button type="submit" class="btn-remove">Remove</button>
                        </form>
                    </td>
                </tr>
            <?php
            }
            ?>
        </tbody>
    </table>
    <a <?php if(isset($_SESSION['logedin'])) { ?> href="checkout.php" <?php } else { ?> href="login.php" <?php } ?> target="bestel.php"><button> check out </button></a>
<?php
if (empty($_SESSION['cart'])) {
    ?>
    <h2>Your Shopping Cart is Empty</h2>
<?php
}
?>