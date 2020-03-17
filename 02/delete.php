<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Delete Result</title>
</head>
<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "classicmodels";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		
		// Check connection
		if ($conn->connect_error) {
			die("Connection failed: ".$conn->connect_error);
		}

		$tableName = $_POST['tableName'];
		if($tableName == 'customers')
		{
			//getting customerNumber of the data from url
			$customerNumber = $_POST['colName'];
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "DELETE FROM customers WHERE customerNumber = '$customerNumber'";
			$result = $conn->query($sql); 
		}

		else if ($tableName == 'employees')
		{
			//getting employeeNumber of the data from url
			$employeeNumber = $_POST['colName'];
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "DELETE FROM employees WHERE employeeNumber = '$employeeNumber'";
			$result = $conn->query($sql); 
		}

		else if ($tableName == 'office'){
			//getting officeCode of the data from url
			$officeCode = $_POST['colName'];
			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "DELETE FROM offices WHERE officeCode = '$officeCode'";
			$result = $conn->query($sql); 
		}


		if ($conn->query($sql) === TRUE)
			echo "<br><br><br><br><br><br><h2 style='color: red;'>Data deleted successfuly.</h2>"; 
		else 
			echo "<br><br><br><br><br><br><h2 style='color: red;'>Error deleting data: " .$conn->error. "</h2>";
		$conn->close();
	?>
</body>
</html>