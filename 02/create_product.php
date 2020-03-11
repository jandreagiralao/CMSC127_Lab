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
	<title>Add Customer</title>
</head>
<body>

    <div class="container">
    	<form class = "add_customer" action="add_product.php" method="post">
				<p>Product Code</p>
				<input type="text" name="productCode" maxlength="15" required> <br>
				<p>Customer Name</p>
				<input type="text" name="productName"  maxlength="70" required> <br>
				<p>Product Line</p>
				<input type="text" name="productLine" maxlength="50" required> <br>
				<p>Product Scale</p>
				<input type="text" name="productScale" maxlength="10" required> <br>
				<p>Product Vendor</p>
				<input type="text" name="productVendor" maxlength="50" required> <br>
				<p>Address Line 1</p>
				<input type="text" name="addressLine1" maxlength="50" required> <br>
				<p>Address Line 2</p>
				<input type="text" name="addressLine2" maxlength="50" > <br>
				<p>City</p>
				<input type="text" name="city" maxlength="50" required> <br>
				<p>State</p>
				<input type="text" name="state" maxlength="50" > <br>
				<p>Postal Code</p>
				<input type="text" name="postalCode" maxlength="15" required> <br>
				<p>Country</p>
				<input type="text" name="country" maxlength="50" required> <br>
				<p>Sales Representative Employee Number</p>
				<select name="salesRepEmployeeNumber" >
				<option>Select Here</option>

				<?php
					$result = $conn->query("SELECT * FROM employees");

					if($result->num_rows > 0)
					{
						while($row = $result->fetch_assoc()) 
						{ 
							?>
						<option value="<?php echo $row['employeeNumber']; ?>" > <?php echo $row['employeeNumber'] ?> </option>
				<?php 	
						}
					}
				?>
				</select>
				
				<p>Credit Limit</p>
				<input type="number" name="creditLimit" value="0.00" required> <br>
				<input type="submit" name="submit" value="Submit">
			</form>
	</div>
</body>
</html>