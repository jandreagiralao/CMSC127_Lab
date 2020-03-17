<!DOCTYPE html>
<html>

<head>
	<title>del_customer</title>
</head>

<body>
	<?php
		session_start();
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
		$sql = "SELECT * from customers ORDER BY customerNumber ASC";
		$result = $conn->query($sql);
	?>

	<table>
        <tr>
            <th>Costumer Number</th>
            <th>Costumer Name</th>
            <th>Contact Last Name</th>
            <th>Contact First Name</th>
            <th>Phone</th>
            <th>Address Line 1</th>
            <th>Address Line 2</th>
            <th>City</th>
            <th>State</th>
            <th>Country</th>
            <th>Postal Code</th>
            <th>Sales Rep Employee Number</th>
            <th>Credit Limit</th>
            <th>Delete</th>
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
                    <td>
                    	<form id='delete' method="POST" action="./delete.php">
									<?php echo "<input name ='colName' type = 'hidden' value = '" . $row['customerNumber'] . "'>"; ?>
									<input name = "tableName" type = 'hidden' value = 'customers' >
									<input id='delete' type="submit" value="Delete">
								</form>
                    </td>
                </tr>
        <?php
            }
        } else echo "Database is empty";
        $conn->close();
        ?>
    </table>

</body>

</html>