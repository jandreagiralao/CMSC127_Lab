<!DOCTYPE html>
<html>

<head>
    <title></title>
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
            $sql = "SELECT * from offices ORDER BY officeCode ASC";
            $result = $conn->query($sql);
            ?>

            <table>
                <tr>
                    <th>Office Code</th>
                    <th>City</th>
                    <th>Phone</th>
                    <th>Address Line 1</th>
                    <th>Address Line 2</th>
                    <th>State</th>
                    <th>Country</th>
                    <th>Postal Code</th>
                    <th>Territory</th>
                    <th>
                        <form action="./create_office.php" method="post">
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
                                <?php echo $row['officeCode'] ?>
                            </td>
                            <td>
                                <?php echo $row['city'] ?>
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
                                <?php echo $row['state'] ?>
                            </td>
                            <td>
                                <?php echo $row['country'] ?>
                            </td>
                            <td>
                                <?php echo $row['postalCode'] ?>
                            </td>
                            <td>
                                <?php echo $row['territory'] ?>
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