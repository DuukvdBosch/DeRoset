<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>bestel</title>
</head>
<style>
body {
  font-family: Arial, sans-serif;
  background-color: #f2f2f2;
}

form {
  width: 80%;
  margin: 0 auto;
  padding: 20px;
  background-color: white;
  box-shadow: 0px 0px 10px 2px rgba(0, 0, 0, 0.1);
}

h1 {
  font-size: 24px;
  margin-top: 30px;
}

label {
  display: block;
  margin-bottom: 10px;
  font-weight: bold;
}

input[type="text"],
input[type="email"],
input[type="tel"],
input[type="number"],
input[type="date"],
input[type="time"],
select,
textarea {
  width: 100%;
  padding: 10px;
  border-radius: 4px;
  border: 1px solid #ccc;
  box-sizing: border-box;
  margin-bottom: 20px;
}

input[type="checkbox"] {
  margin-right: 10px;
}

input[type="submit"] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type="submit"]:hover {
  background-color: #45a049;
}

.error {
  color: red;
  font-weight: bold;
  margin-top: 5px;
}

@media screen and (max-width: 600px) {
  form {
    width: 100%;
    padding: 10px;
  }
}
    </style>
<body>
	<h1>Persoonlijke gegevens</h1>
	<form method="post" action="0processorder.php">
		<label for="name">Full Name:</label>
		<input type="text" id="name" name="name" value="<?php echo $_SESSION['firstname'] ?>  <?php  echo $_SESSION['lastname'] ?>"><br><br>

		<label for="email">Email Address:</label>
		<input type="email" id="email" name="email" value="<?php echo $_SESSION['email']?>"><br><br>

		<label for="phone">Phone Number:</label>
		<input type="tel" id="phone" name="phone"required><br><br>

		<label for="address">Delivery Address:</label>
		<input type="text" id="address" name="address"value="<?php echo $_SESSION['address']?>"> <br><br>

		<h1>Ophaal/levering</h1>
        <select id="flavor" name="flavor">
			<option value="bezorgen">Bezorgen</option>
			<option value="ophalen">Ophalen</option>
		</select><br><br>
		<label for="date">Date:</label>
		<input type="date" id="date" name="date" required><br><br>

		<label for="time">Time:</label>
		<input type="time" id="time" name="time"><br><br>

		<label for="requests">Special Requests:</label>
		<textarea id="requests" name="requests"></textarea><br><br>

		<h1>Payment Information</h1>

		<label for="card">Card Number:</label>
		<input type="text" id="card" name="card"required><br><br>

		<label for="expiry">Expiration Date:</label>
		<input type="text" id="expiry" name="expiry"required><br><br>

		<label for="security">Security Code:</label>
		<input type="text" id="security" name="security" required><br><br>

		<input type="submit" value="Submit">
	</form>
</body>
</html>