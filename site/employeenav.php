<?php
session_start();
?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>IJssalon De Roset</title>
    <link rel="stylesheet" href="css/side-info.css">
  </head>
  <body>
    <header>
      <nav>
        <ul>
          <li><a href="2allorders.php">Bestellingen</a></li>
          <li><a href="2users.php">Gebruikers</a></li>
          <li><a href="2products.php">Producten</a></li>
          <div class="dropdown">
            <?php
            if(isset($_SESSION['logedin'])){?>  
              <li>
                <a href=""><?php echo $_SESSION['firstname'] ?></a>
              </li> 
              <div class="dropdown-content">
                <a href="2employprofile.php">Profiel</a>
                <a href="0processloguit.php">Log uit</a>
              </div>
              <?php
            }?>
          </div>
        </ul>
      </nav>
    </header>
  </body>
</html>
