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
				<p>Product Name</p>
				<input type="text" name="productName"  maxlength="70" required> <br>
				<p>Product Line</p>
				<select name="productLine" >
				<option>Select Here</option>

				<?php
					$result = $conn->query("SELECT * FROM productlines");

					if($result->num_rows > 0)
					{
						while($row = $result->fetch_assoc()) 
						{ 
							?>
						<option value="<?php echo $row['productLine']; ?>" > <?php echo $row['productLine'] ?> </option>
				<?php 	
						}
					}
				?>
				</select>
				<p>Product Scale</p>
				<input type="text" name="productScale" maxlength="10" required> <br>
				<p>Product Vendor</p>
				<input type="text" name="productVendor" maxlength="50" required> <br>
				<p>Product Description</p>
				<textarea type="text" name="productDescription" required> </textarea><br>
				<p>Quantity in Stock</p>
				<input type="number" step="1" name="quantityInStock" required> <br>
				<p>Buy Price</p>
				<input type="number" step="0.01" name="buyPrice" required> <br>
				<p>MSRP</p>
				<input type="number" step="0.01" name="MSRP" required> <br>

				<input type="submit" name="submit" value="Submit">
			</form>
	</div>
</body>
</html>