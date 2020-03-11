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
	<title>Add Payment</title>
</head>
<body>

    <div class="container">
    	<form class = "add" id = "add_order" action = "add_order.php" method = "post">
            <p>Order Number</p>
			<input type="number" name="orderNumber" step="1" maxlength="11" required> <br>
            <p>Order Date</p>
			<input type="date" name="orderDate" required> <br>
            <p>Required Date</p>
			<input type="date" name="requiredDate" required> <br>
            <p>Shipped Date</p>
			<input type="date" name="shippedDate" required> <br>
			<p>Status</p>
			<input type="text" name="status" maxlength="15" required> <br>
            <p>Comments</p>
			<input type="text" name="comments" required> <br>
            <p>Customer Number</p>
            <select name="customerNumber" >
            <option>Select Here</option>
            <?php
                $result = $conn->query("SELECT * FROM customers");

                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        ?>
                    <option value="<?php echo $row['customerNumber']; ?>" > <?php echo $row['customerNumber'] ?> </option>
            <?php
                    }
                }
            ?>
            </select>

			<input type="submit" name="submit" value="Submit">
			</form>
	</div>
</body>
</html>
