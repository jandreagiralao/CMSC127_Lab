<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
    <!--
	<form action="./manage_educ.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
		<input id='delete' type="submit" value="Back to Manage Education Page">
    </form>
    -->

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
                    $productCode = $_POST['productCode'];
                    $productName = $_POST['productName'];
                    $productLine = $_POST['productLine'];
                    $productScale = $_POST['productScale'];
                    $productVendor = $_POST['productVendor'];
                    $productDescription = $_POST['productDescription'];
                    $quantityInStock = (int) $_POST['quantityInStock'];
                    $buyPrice = $_POST['buyPrice'];
                    $MSRP = $_POST['MSRP'];

					//insert values to table
					$sql = "INSERT INTO products VALUES ('$productCode', '$productName', '$productLine', '$productScale', '$productVendor', '$productDescription', '$quantityInStock', '$buyPrice', '$MSRP')";

					if ($conn->query($sql) === TRUE)
						echo "<h2 style='color: red;'>Data inserted successfuly.</h2>";
					else
						echo "<h2 style='color: red;'>Error adding data:" .$conn->error. "</h2>";
					$conn->close();
				}
			?>
	</div>
</body>
</html>
