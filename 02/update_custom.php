<!DOCTYPE html>
<html>
<head>
	<title>Update Customer - Result</title>
</head>

<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "classicmodels";

		$field = $_POST['field'];
		$customerNumber = $_POST['colName'];
		if($field == 'customerName' || $field == 'contactLastName' || $field == 'contactFirstName' || $field == 'phone' || $field == 'addressLine1' || $field == 'addressLine2' || $field == 'city' || $field == 'state' || $field == 'postalCode' || $field == 'country')
			$newVal = $_POST['newVal']; 
		else if($field == 'customerNumber')
			$newVal = (int) $_POST['newVal']; 
		else if ($field == 'salesRepEmployeeNumber')
			$newVal = $_POST['newSREN'];
		else if($field == 'creditLimit')
			$newVal = number_format($_POST['newVal'], 2, '.', '');
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: ".$conn->connect_error);
		}

		$sql = "UPDATE `customerS` SET `$field` = '$newVal' WHERE `customerNumber` = '$customerNumber'";

		if ($conn->query($sql) === TRUE)
			echo "<h2 style='color: red;'>Record updated successfully</h2>";
		else
			echo "<h2 style='color: red;'>Error updating record: " . $conn->error."</h2>"	;

		$conn->close();
	?>
</body>
</html>