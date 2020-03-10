<!DOCTYPE html>
<html>

<head>
    <title>List of Employees</title>
</head>

<body>
    <section id="container">
        <section id="content">
            <?php
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
            $sql = "SELECT * from employees ORDER BY employeeNumber ASC";
            $result = $conn->query($sql);
            ?>

            <table>
                <tr>
                    <th>Employee Number</th>
                    <th>Last Name</th>
                    <th>First Name</th>
                    <th>Extension</th>
                    <th>Email</th>
                    <th>Office Code</th>
                    <th>Reports To</th>
                    <th>Job Title</th>
                    <th>
                        <form action="./add_employees.php" method="post">
                            <input id='' type="submit" value="Add">
                        </form>
                    </th>
                </tr>

                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td>
                                <?php echo $row['employeeNumber'] ?>
                            </td>
                            <td>
                                <?php echo $row['lastName'] ?>
                            </td>
                            <td>
                                <?php echo $row['firstName'] ?>
                            </td>
                            <td>
                                <?php echo $row['extension'] ?>
                            </td>
                            <td>
                                <?php echo $row['email'] ?>
                            </td>
                            <td>
                                <?php echo $row['officeCode'] ?>
                            </td>
                            <td>
                                <?php echo $row['reportsTo'] ?>
                            </td>
                            <td>
                                <?php echo $row['jobTitle'] ?>
                            </td>
                        </tr>
                <?php
                    }
                } else echo "Database is empty";
                $conn->close();
                ?>
            </table>
        </section>
    </section>
</body>