<!DOCTYPE html>
<html>
<head>
	<title>Add Customer</title>
</head>
<body>

    <div class="container">
    	<form class = "add_customer" action="add.php" method="post">
				<p>Customer Number</p>
				<input type="text" name="customerNumber" required> <br>
				<p>Customer Number</p>
				<input type="text" name="customerName" required> <br>
				<p>Contact Last Name</p>
				<input type="text" name="contactLastName" required> <br>
				<p>Contact First Name</p>
				<input type="text" name="contactFirstName" required> <br>
				<p>Phone Number</p>
				<input type="text" name="phone" required> <br>
				<p>Address Line 1</p>
				<input type="text" name="addressLine1" required> <br>
				<p>Address Line 2</p>
				<input type="text" name="addressLine2" required> <br>
				<p>City</p>
				<input type="text" name="city" required> <br>
				<p>State</p>
				<input type="text" name="state" required> <br>
				<p>Postal Code</p>
				<input type="text" name="postalCode" required> <br>
				<p>Country</p>
				<input type="text" name="country" required> <br>
				<p>Sales Representative Employee Number</p>
				<input type="text" name="salesRepEmployeeNumber" required> <br>
				<p>Credit Limit</p>
				<input type="text" name="creditLimit" required> <br>
				<input type="submit" name="submit" value="Submit">
			</form>
	</div>
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>
</html>