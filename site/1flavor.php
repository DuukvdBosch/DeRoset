<?php 
include('side-info.php');

require '0database.php';

$id = $_GET['id'];

$stmt = $conn->prepare("SELECT * FROM ice_cream WHERE id = $id");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetch();
?>


<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>IJssalon De Roset</title>
    <link rel="stylesheet" href="css/flavors.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="store.js" async></script>

    <style>
      #addtocart{
            background-color: #ffb7a1;
            border-radius: 10px;
        }
    </style>

  </head>
  <body>
    <main>
    <div class="logo"><img class="img-logo" src="images/logo-de-roset.png" alt="Logo"></div>
      
    <div class="flavor-of-the-day">
        <strong>Smaak van de dag:</strong><br><br>
        <a href="flavor.php?id=3"><img class="img-flavor" src="images/smaak-aardbeien.jpg" alt="Ijs van den dag"></a><br><br>
        <strong>Aardbei</strong>
      </div>

    <div class="box3">
    <div class="cart">
            <h2>Shopping Cart</h2>
            <iframe title="cart" src="cart.php"></iframe>
        </div>
        <button id="cart-button">Cart: <span id="cart-count"><?php echo count($_SESSION['cart']) ?></span> items</button>

        <br><br>
        <img class="img-pickedflavor" src="<?php echo $flavor['image']?>" alt="<?php echo $flavor['name']?>">
        <br><br>
        <h2><?php echo $flavor['name']?></h2>
        <p> <?php echo $flavor['description'] ?> </p>
        <p> <?php echo $flavor['brand'] ?> </p>
        <p> €<?php echo $flavor['price']; ?>/L </p>

        <br>
          <a href="bestel.php"> <center> <button id=addtocart onclick="addToCart(<?php echo $flavor['id'] ?>)">Add to Cart</button></center></a>

        <section class="grid-container">

            
        </section>
    </div>

    <script>
        const cartButton = document.getElementById('cart-button');
        const cart = document.querySelector('.cart');

        cartButton.addEventListener('click', () => {
            cart.classList.toggle('show');
        });
    </script>

      
      <div class="popular-flavors">
        <h2>Populaire smaken:</h2>
        <ul>
          <li><a href="1flavor.php?id=1"><img class="img-flavor" src="images/smaak-vanille.jpg" alt="vanille"></a></li>
          <br>
          <li><strong>Vanille</strong></li>
          <br><br>
          <li><a href="1flavor.php?id=2"><img class="img-flavor" src="images/smaak-chocolade.png" alt="chocolade"></a></li>
          <br>
          <li><strong>Chocolade</strong></li>
          <br><br>
          <li><a href="1flavor.php?id=9"><img class="img-flavor" src="images/smaak-pistache.png" alt="pistache"></a></li>
          <br>
          <li><strong>Pistache</strong></li>
          <br><br>
        </ul>
      </div>

        <div class="popular-flavors"> 
            <h2>Contact</h2> 
            <p>Wilt u cotact met ons opnemen?<br>Informatie vind u hieronder:</p><br>
            <Strong>Telefoonnummer:</Strong><br>
            <p>- 0251 654 683</p><br><br>
            <strong>E-mail:</strong>
            <p>- deroset@hotmail.nl</p><br><br>
            <strong>Locaties:</strong>
            <p>Castricum:</p>
            <li>Geesterduin 39</li>
            <li>Burgemeester Mooijstraat 17</li><br> 
            <p>Alkmaar:</p>
            <li>Europaboulevard 63</li><br>
            <p>Heerugowaard:</p>
            <li>Middenwaard 44</li>
        </div>
    </main>
  </body>
</html>
