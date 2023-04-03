<!DOCTYPE html>
<?php
require '0database.php';
$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM ice_cream WHERE id = $id");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetch();
?>
<html lang="en">
<style>
    .container {
        text-align: left;
        margin: auto;
        width: 50%;
        padding: 20px;
    }

    img {
        width: 75%;
        height: auto;
        border-radius: 10px;
        margin-bottom: 20px; 
    }

    h1 {
        font-size: 36px;
        font-weight: bold;
        margin-bottom: 10px;
    }

    p {
        font-size: 18px;
        line-height: 1.5;
    }


</style>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $flavor['name'] ?></title>
</head>

<body>
        <img src="<? echo $flavor['image'] ?>" alt="Ice Cream Flavor">
    <div class="container">
        <h1> <?php echo $flavor['name'] ?></h1>
        <p> <?php echo $flavor['description'] ?> </p>
        <p> <?php echo $flavor['brand'] ?> </p>
        <p> €<?php echo $flavor['price']; ?>/L </p>
    </div>
</body>

</html>