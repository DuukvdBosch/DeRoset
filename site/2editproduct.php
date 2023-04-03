<?php 


include('employeenav.php');

require('0database.php');

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
    <link rel="stylesheet" href="css/profile.css">
  </head>
  <body>
	<div class="container">
		<h1>Smaak aanpassen</h1>
		<form method="post" action="0processflavorup.php?id=<?php echo $flavor['id']; ?>" >
			<label for="name">Naam:</label>
			<input type="text" id="name" name="name" value="<?php echo $flavor['name']; ?>"><br>

			<label for="description">Beschrijving:</label>
			<input type="text" id="description" name="description" value="<?php echo $flavor['description']; ?>"><br>

			<label for="brand">merk:</label>
			<input type="text" id="brand" name="brand" value="<?php echo $flavor['brand']; ?>"><br>

			<label for="price">prijs:</label>
			<input type="text" id="price" name="price" value="<?php echo $flavor['price']; ?>"><br>

			<label for="image">afbeelding:</label>
			<input type="text" id="image" name="image" value="<?php echo $flavor['image']; ?>"><br>

			<input type="submit" value="Opslaan"><br><br>
		</form>
	</div>
		

</body>
</html>
