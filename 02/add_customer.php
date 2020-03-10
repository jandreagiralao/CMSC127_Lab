<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<div class="container">
		<?php

				if($_SERVER["REQUEST_METHOD"] == "POST") 
					connect();

				function connect(){
					$error_msg = "";
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "classicmodels";
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					/*
					if (mysqli_connect_error())
						die("Connection failed: ".mysqli_connect_error());
					else echo "Connected successfully <br>";
					*/
					$customerNumber = (int) $_POST['customerNumber'];
					$customerName = $_POST['customerName'];
					$contactLastName = $_POST['contactLastName'];
					$contactFirstName = $_POST['contactFirstName'];
					$phone = $_POST['phone'];
					$addressLine1 = $_POST['addressLine1'];
					$addressLine2 = $_POST['addressLine2'];
					$city = $_POST['city'];
					$state = $_POST['state'];
					$postalCode = $_POST['postalCode'];
					$country = $_POST['country'];
					$salesRepEmployeeNumber = (int) $_POST['salesRepEmployeeNumber'];
					$creditLimit = number_format($_POST['creditLimit'], 2, '.', '');	

					//insert values to table
					$sql = "INSERT INTO customers VALUES ('$customerNumber', '$customerName', '$contactLastName', '$contactFirstName', '$phone', '$addressLine1', '$addressLine2', '$city', '$state', '$postalCode', '$country', '$salesRepEmployeeNumber', '$creditLimit')";

					if ($conn->query($sql) === TRUE)
						echo "<h2 style='color: red;'>Data inserted successfuly.</h2>"; 
					else 
						echo "<h2 style='color: red;'>Error adding data:" .$conn->error. "</h2>";
					$conn->close();
				}
			?>
	</div>
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>
</html>