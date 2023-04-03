<?php 
include('side-info.php');

?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>IJssalon De Roset</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <main>
      <div></div>
      
    <div class="box3">

	<h2>LOGIN</h2>

        <form action="0processlogin.php" method="post">
          <label for="email">Email:</label>
          <input type="email" id="email" name="email" required>

          <br><br>

          <label for="password">Wachtwoord:</label>
          <input type="password" id="password" name="password" required>

          <br><br>

          <input type="submit" value="Submit"><br>
          geen account? <a href="1signin.php">registreer</a>
        </form>

     </div>

     </main>
  </body>
</html>
