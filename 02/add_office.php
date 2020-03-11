<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <div class="container">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST")
            connect();

        function connect(){
            $error_msg = "";
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
            $officeCode = $_POST['officeCode'];
            $city = $_POST['city'];
            $phone = $_POST['phone'];
            $addressLine1 = $_POST['addressLine1'];
            $addressLine2 = $_POST['addressLine2'];
            $state = $_POST['state'];
            $country = $_POST['country'];
            $postalCode = $_POST['postalCode'];
            $territory = $_POST['territory'];

            //insert values to table
            $sql = "INSERT INTO offices VALUES ('$officeCode', '$city', '$phone', '$addressLine1', '$addressLine2', '$state', '$country', '$postalCode', '$territory')";

            if ($conn->query($sql) === TRUE)
                echo "<h2 style='color: red;'>Data inserted successfuly.</h2>";
            else
                echo "<h2 style='color: red;'>Error adding data:" . $conn->error . "</h2>";
            $conn->close();
        }
        ?>
    </div>
</body>
</html>