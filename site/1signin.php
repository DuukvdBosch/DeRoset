<?php 
include('side-info.php');

?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>IJssalon De Roset</title>
    <link rel="stylesheet" href="css/signin.css">
  </head>
  <body>
    <main>
      <div class="logo"><img class="img-logo" src="images/logo-de-roset.png" alt="Logo"></div>
      
    <div class="box3">

	<h2>Registreer</h2>

        <form action="0processsignin.php" method="post">
          <label for="firstname">Voornaam:</label>
          <input type="text" id="firstname" name="firstname" required>

          <br><br>

          <label for="lastname">Achternaam:</label>
          <input type="text" id="lastname" name="lastname" required>

          <br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <br><br>

          <label for="address">Adres:</label>
          <input type="text" id="address" name="address" required>

          <br><br>

          <label for="password">Wachtwoord:</label>
          <input type="password" id="password" name="password" required>

          <br><br>

          <input type="submit" value="Submit"><br>
          al een account? <a href="1login.php">Login</a>
        </form>

     </div>

     </main>
  </body>
</html>
