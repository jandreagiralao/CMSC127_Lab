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
    die("Connection failed: " . mysqli_connect_error());
else echo "Connected successfully <br>";

?>

<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <div class="container">
        <form class="add" id="add_office" action="add_office.php" method="post">
            <p>Office Code</p>
            <input type="text" name="officeCode" maxlength="10" required> <br>
            <p>City</p>
            <input type="text" name="city" maxlength="50" required> <br>
            <p>Phone</p>
            <input type="text" name="phone" maxlength="50" required> <br>
            <p>State</p>
            <input type="text" name="state" maxlength="50"> <br>
            <p>Address Line 1</p>
            <input type="text" name="addressLine1" maxlength="50" required> <br>
            <p>Address Line 2</p>
            <input type="text" name="addressLine2" maxlength="50"> <br>
            <p>Country</p>
            <input type="text" name="country" maxlength="50" required> <br>
            <p>Postal Code</p>
            <input type="text" name="postalCode" maxlength="15" required> <br>
            <p>Territory</p>
            <input type="text" name="territory" maxlength="10" required> <br>


            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>