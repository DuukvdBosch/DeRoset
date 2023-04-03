<?php 

include('employeenav.php');

require('0database.php');

?>

<!DOCTYPE html>
<html lang="nl">
  <head>
    <title>IJssalon De Roset</title>
    <link rel="stylesheet" href="css/profile.css">
  </head>
  <body>
	<div class="container">
		<h1>Profiel aanpassen</h1>
		<form method="post" action="0processupdateprof.php" >
			<label for="firstname">Voornaam:</label>
			<input type="text" id="firstname" name="firstname" value="<?php echo $_SESSION['firstname']; ?>"><br>

			<label for="lastname">Achternaam:</label>
			<input type="text" id="lastname" name="lastname" value="<?php echo $_SESSION['lastname']; ?>"><br>

			<label for="email">Email:</label>
			<input type="email" id="email" name="email" value="<?php echo $_SESSION['email']; ?>"><br>

			<label for="address">Adres:</label>
			<input type="text" id="address" name="address" value="<?php echo $_SESSION['address']; ?>"><br>

			<label for="password">Wachtwoord:</label>
			<input type="text" id="password" name="password" value="<?php echo $_SESSION['password']; ?>"><br>

			<input type="submit" value="Opslaan"><br><br>
		</form>
		
		<form action="0processdeleteprof.php" method="post">
				<input type="submit" value="Account verwijderen">
			</form>
	</div>
</body>
</html>
