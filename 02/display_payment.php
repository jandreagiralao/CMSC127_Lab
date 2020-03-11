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
            $sql = "SELECT * from payments ORDER BY customerNumber ASC";
            $result = $conn->query($sql);
            ?>

            <table>
                <tr>
                    <th>Customer Number</th>
                    <th>Check Number</th>
                    <th>Payment Date</th>
                    <th>Amount</th>
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
                                <?php echo $row['checkNumber'] ?>
                            </td>
                            <td>
                                <?php echo $row['paymentDate'] ?>
                            </td>
                            <td>
                                <?php echo $row['amount'] ?>
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