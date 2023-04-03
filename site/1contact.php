<?php 
include('side-info.php');

?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>IJssalon De Roset</title>
    <link rel="stylesheet" href="css/contact.css">
  </head>
  <body>

    <main>
      <div class="logo"><img class="img-logo" src="images/logo-de-roset.png" alt="Logo"></div>
      
    <div class="box3">

	<h2>Contact ons</h2>

        <form action="succesfull.php" method="post">
          <label for="name">Naam:</label>
          <input type="text" id="name" name="name" required>

          <br><br>

          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <br><br>

          <label for="message">Bericht:</label>
          <textarea type="textarea" id="message" name="message" required></textarea>
          <br>
          <input type="submit" value="Submit">
        </form>

     </div>

     </main>
  </body>
</html>
