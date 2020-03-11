<?php

	$error_msg = "";
	$servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "classicmodels";
	// Create connection
	$conn = new mysqli($servername, $username, $password, $dbname);
	// Check connection

	if (mysqli_connect_error())
		die("Connection failed: ".mysqli_connect_error());
	else echo "Connected successfully <br>";

?>

<!DOCTYPE html>
<html>
<head>
	<title>Add Payment</title>
</head>
<body>

    <div class="container">
    	<form class = "add" id = "add_payment" action = "add_productline.php" method = "post" enctype="multipart/form-data">
            <p>Product Line</p>
			<input type="text" name="productLine" maxlength="50" required> <br>
    	    <p>Text Description</p>
			<input type="text" name="textDescription" maxlength="4000" required> <br>
			<p>HTML Description</p>
			<input type="text" name="htmlDescription" required> <br>
            <p>Image</p>
            <input type="file" name="image" required> <br>

			<input type="submit" name="submit" value="Submit">
			</form>
	</div>
</body>
</html>
