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
          <li><a href="1overons.php">Over ons</a></li>
          <li><a href="bestel.php">Bestellen</a></li>
          <li><a href="1blog.php">Blog</a></li>
          <li><a href="1contact.php">Contact</a></li>
          <div class="dropdown">
            <?php
            if(isset($_SESSION['logedin'])){?>
              <li>
                <a href=""><?php echo $_SESSION['firstname'] ?></a>
              </li> 
              <div class="dropdown-content">
                <a href="1profile.php">Profiel</a>
                <a href="1myorders.php">Bestellingen</a>
                <a href="0processloguit.php">Log uit</a>
              </div>
              <?php
            }else {?>
            <li>
              <a href="1login.php">Login</a>
            </li>
            <?php } ?>
          </div>
        </ul>
      </nav>
    </header>
  </body>
</html>
