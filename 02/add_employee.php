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
            $employeeNumber = $_POST['employeeNumber'];
            $lastName = $_POST['lastName'];
            $firstName = $_POST['firstName'];
            $extension = $_POST['extension'];
            $email = $_POST['email'];
            $officeCode = $_POST['officeCode'];
            $reportsTo = $_POST['reportsTo'];
            $jobTitle = $_POST['jobTitle'];

            //insert values to table
            $sql = "INSERT INTO employees VALUES ('$employeeNumber', '$lastName', '$firstName', '$extension', '$email', '$officeCode', '$reportsTo', '$jobTitle')";

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