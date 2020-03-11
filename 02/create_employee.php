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
    <title>Add Employee</title>
</head>

<body>
    <div class="container">
        <form class="add_form" action="add_employee.php" method="post">
            <p>Employee Number</p>
            <input type="number" name="employeeNumber" required> <br>
            <p>Last Name</p>
            <input type="text" name="lastName" required> <br>
            <p>First Name</p>
            <input type="text" name="firstName" required> <br>
            <p>Extension</p>
            <input type="text" name="extension" required> <br>
            <p>Email</p>
            <input type="text" name="email" required> <br>
            <p>Office Code</p>
            <p>Reports To</p>
            <select name="officeCode" >
                <option value="null">Select Here</option>
                <?php
                    $result = $conn->query("SELECT * FROM offices");

                    if($result->num_rows > 0)
                    {
                        while($row = $result->fetch_assoc()) 
                        { 
                            ?>
                        <option value="<?php echo $row['officeCode']; ?>" > <?php echo $row['officeCode'] ?> </option>
                <?php   
                        }
                    }
                ?>
            </select>

            <p>Reports To</p>
            <select name="reportsTo" >
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
                ?>
            </select>

            <p>Job Title</p>
            <input type="text" name="jobTitle" required> <br>
            <input type="submit" name="submit" value="Submit">
        </form>
    </div>
</body>