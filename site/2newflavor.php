<?php 
include('employeenav.php');

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

	<h2>Smaak toevoegen</h2>

        <form action="0processnewflavor.php" method="post">
          <label for="name">Ijssmaak:</label>
          <input type="text" id="name" name="name" required>

          <br><br>

          <label for="description">Description:</label>
          <input type="text" id="description" name="description" required>

          <br><br>

          <label for="brand">brand</label>
          <input type="text" id="brand" name="brand" required>

          <br><br>

          <label for="price">Price:</label>
          <input type="text" id="price" name="price" required>

          <br><br>

          <label for="image">Image name:</label>
          <input type="text" id="image" name="image" required>

          <br><br>

          <input type="submit" value="Submit"><br>
          <a href="2products.php">Terug</a>
        </form>

     </div>

     </main>
  </body>
</html>
