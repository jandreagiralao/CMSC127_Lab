<!DOCTYPE html>
<html>
<head>
	<title>Add Customer</title>
</head>
<body>

    <div class="container">
    	<form class = "add_customer" action="add_customer.php" method="post">
				<p>Customer Number</p>
				<input type="text" name="customerNumber" maxlength="11" required> <br>
				<p>Customer Name</p>
				<input type="text" name="customerName"  maxlength="50" required> <br>
				<p>Contact Last Name</p>
				<input type="text" name="contactLastName" maxlength="50" required> <br>
				<p>Contact First Name</p>
				<input type="text" name="contactFirstName" maxlength="50" required> <br>
				<p>Phone Number</p>
				<input type="text" name="phone" maxlength="50" required> <br>
				<p>Address Line 1</p>
				<input type="text" name="addressLine1" maxlength="50" required> <br>
				<p>Address Line 2</p>
				<input type="text" name="addressLine2" maxlength="50" required> <br>
				<p>City</p>
				<input type="text" name="city" maxlength="50" required> <br>
				<p>State</p>
				<input type="text" name="state" maxlength="50" required> <br>
				<p>Postal Code</p>
				<input type="text" name="postalCode" maxlength="15" required> <br>
				<p>Country</p>
				<input type="text" name="country" maxlength="50" required> <br>
				<p>Sales Representative Employee Number</p>
				<input type="text" name="salesRepEmployeeNumber" maxlength="11" required> <br>
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