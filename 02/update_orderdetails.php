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
	<title>Add Order Details</title>
</head>
<body>

    <div class="container">
    	<form class = "add" id = "update_orderdetails" action = "add_orderdetails.php" method = "post">
            <p>Order Number</p>
            <select name="orderNumber" >
            <option>Select Here</option>
            <?php
                $result = $conn->query("SELECT * FROM orders");

                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        ?>
                    <option value="<?php echo $row['orderNumber']; ?>" > <?php echo $row['orderNumber'] ?> </option>
            <?php
                    }
                }
            ?>
            </select>
            <p>Product Code</p>
            <select name="productCode" >
            <option>Select Here</option>
            <?php
                $result = $conn->query("SELECT * FROM products");

                if($result->num_rows > 0)
                {
                    while($row = $result->fetch_assoc())
                    {
                        ?>
                    <option value="<?php echo $row['productCode']; ?>" > <?php echo $row['productCode'] ?> </option>
            <?php
                    }
                }
            ?>
            </select>
    	    <p>Quantity Ordered</p>
			<input type="number" name="quantityOrdered" step="1" maxlength="11" required> <br>
			<p>Price Each</p>
			<input type="number" name="priceEach" step="0.01" required> <br>
            <p>Order Line Number</p>
			<input type="number" name="orderLineNumber" step="1" maxlength="6" required> <br>

			<input type="submit" name="submit" value="Submit">
			</form>
	</div>
</body>
</html>
