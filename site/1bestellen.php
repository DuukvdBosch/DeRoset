<?php 
include('side-info.php');
require '0database.php';

$stmt = $conn->prepare("SELECT * FROM ice_cream");
$stmt->execute();
$result = $stmt->setFetchMode(PDO::FETCH_ASSOC);
$flavor = $stmt->fetchAll();
?>


<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>IJssalon De Roset</title>
    <link rel="stylesheet" href="css/side-info.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="store.js" async></script>

    <style>
       .cart {
            position: fixed;
            top: 0;
            right: -350px;
            width: 320px;
            height: 100%;
            background-color: white;
            padding: 20px;
            transition: right 0.5s ease-in-out;
        }

        .cart.show {
            right: 0.1%;
        }

        .cart iframe {
            width: 100%;
            height: 80%;
        }

        .cart h2 {
            text-align: center;
        }

        #cart-button {
            position: fixed;
            bottom: 20px;
            right: 20px;
            padding: 10px;
            background-color: blue;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        #cart-count {
            font-weight: bold;
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
        <h2>Onze smaken</h2>


    <section class="grid-container">

        <?php
        foreach ($flavor as $flavor) { ?>
            <main>
                <div class="grid-item"> 
                  <a href="1flavor.php?id=<?php echo $flavor['id'] ?>"><img class="img-orderflavor" src="<?php echo $flavor['image'] ?>" alt="<?php echo $flavor['name'] ?>"></a>
                    <strong><?php echo $flavor['name'] ?></strong>
                </div>
            </main>
        <?php
        }
        ?>
    </section>
	</div>
      
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
