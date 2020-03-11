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
    	<form class = "add" id = "add_payment" action = "add_payment.php" method = "post">
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
            <p>Check Number</p>
			<input type="text" name="checkNumber" maxlength="50" required> <br>
    	    <p>Payment Date</p>
			<input type="date" name="paymentDate" required> <br>
			<p>Amount</p>
			<input type="number" name="amount" step="0.01" required> <br>

			<input type="submit" name="submit" value="Submit">
			</form>
	</div>
</body>
</html>
