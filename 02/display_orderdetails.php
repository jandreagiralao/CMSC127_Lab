<!DOCTYPE html>
<html>

<head>
    <title>Order Details</title>
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
            $sql = "SELECT * from orderdetails ORDER BY orderNumber ASC";
            $result = $conn->query($sql);
            ?>

            <table>
                <tr>
                    <th>Order Number</th>
                    <th>Product Code</th>
                    <th>Quantity Ordered</th>
                    <th>Price Each</th>
                    <th>Order Line Number</th>
                    <th>
                        <form action="./create_orderdetails.php" method="post">
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
                                <?php echo $row['orderNumber'] ?>
                            </td>
                            <td>
                                <?php echo $row['productCode'] ?>
                            </td>
                            <td>
                                <?php echo $row['quantityOrdered'] ?>
                            </td>
                            <td>
                                <?php echo $row['priceEach'] ?>
                            </td>
                            <td>
                                <?php echo $row['orderLineNumber'] ?>
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
