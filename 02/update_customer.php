<!DOCTYPE html>
<html>

<head>
<title>Update Customer</title>
</head>

<body>
	<?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "classicmodels";
        $customerNumber = $_POST['colName'];
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        /*
					if (mysqli_connect_error())
						die("Connection failed: ".mysqli_connect_error());
					else echo "Connected successfully <br>";
					*/
        $sql = "SELECT * from customers WHERE customerNumber = $customerNumber";
        $result = $conn->query($sql);
    ?>
	<table>
		<tr>
			<th>Customer Number</th>
            <th>Customer Name</th>
            <th>Contact Last Name</th>
            <th>Contact First Name</th>
            <th>Phone</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>Update</th>
		</tr>

		<?php
	        if ($result->num_rows > 0) {
	            // output data of each row
	            while ($row = $result->fetch_assoc()) {
	    ?>
		<tr>
			<td>
                <?php echo $row['customerNumber'] ?>
            </td>
            <td>
                <?php echo $row['customerName'] ?>
            </td>
            <td>
                <?php echo $row['contactLastName'] ?>
            </td>
            <td>
                <?php echo $row['contactFirstName'] ?>
            </td>
            <td>
                <?php echo $row['phone'] ?>
            </td>
            <td>
                <?php echo $row['addressLine1'] ?>
            </td>
            <td>
                <?php echo $row['addressLine2'] ?>
            </td>
            <td>
            	<form method = "POST" action = "update_custom.php">
					<select name = "field">
						<option value = "customerNumber">Customer Number</option>
						<option value = "customerName">Customer Name</option>
						<option value = "contactFirstName">Contact First Name</option>
						<option value = "contactLastName">Contact Last Name</option>
						<option value = "phone">Phone</option>
						<option value = "addressLine1">Address Line 1</option>
						<option value = "addressLine2">Address Line 2</option>
						<option value = "city">City</option>
						<option value = "state">State</option>
						<option value = "postalCode">Postal Code</option>
						<option value = "country">Country</option>
						<option value = "creditLimit">Credit Limit</option>
					</select>
						
					<br>
					<input name = "newVal" type = "text">

					<?php echo "<input name ='colName' type = 'hidden' value = '$customerNumber'>"; ?>
					<input type = "submit" value = "Update">
            </td>
				</form>
		</tr>
	</table>
	<br><br>
	<table>
		<tr>
			<th>City</th>
            <th>State</th>
            <th>Postal Code</th>
            <th>Country</th>
            <th>Sales Rep Employee Number</th>
            <th>Credit Limit</th>
		</tr>

		<tr>
			<td>
                <?php echo $row['city'] ?>
            </td>
            <td>
                <?php echo $row['state'] ?>
            </td>
            <td>
                <?php echo $row['postalCode'] ?>
            </td>
            <td>
                <?php echo $row['country'] ?>
            </td>
            <td>
                <?php echo $row['salesRepEmployeeNumber'] ?>
            </td>
            <td>
                <?php echo $row['creditLimit'] ?>
            </td>
	<?php
	        }
	    } else echo "Database is empty";
	?>
		</tr>

		<tr>
			<th></th>
			<th></th>
			<th></th>
			<th></th>
			<th><br>Update Sales Rep Employee Number</th>
		</tr>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
			<td>			                
                <form method="POST" action="update_custom.php">
					<select name="newSREN" >
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
						$conn->close();
					?>
					</select>
					<?php echo "<input name ='field' type = 'hidden' value = 'salesRepEmployeeNumber'>"; ?>
					<?php echo "<input name ='colName' type = 'hidden' value = '$customerNumber'>"; ?>
					<input type="submit" name="submitSR" value="Update">
                </form>
            </td>
		</tr>
	</table>
</body>
</html>