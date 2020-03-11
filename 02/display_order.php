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
            $sql = "SELECT * from orders ORDER BY orderNumber ASC";
            $result = $conn->query($sql);
            ?>

            <table>
                <tr>
                    <th>Order Number</th>
                    <th>Order Date</th>
                    <th>Required Date</th>
                    <th>Shipped Date</th>
                    <th>Status</th>
                    <th>Comments</th>
                    <th>Customer Number</th>
                    <th>
                        <form action="./create_order.php" method="post">
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
                                <?php echo $row['orderDate'] ?>
                            </td>
                            <td>
                                <?php echo $row['requiredDate'] ?>
                            </td>
                            <td>
                                <?php echo $row['shippedDate'] ?>
                            </td>
                            <td>
                                <?php echo $row['status'] ?>
                            </td>
                            <td>
                                <?php echo $row['comments'] ?>
                            </td>
                            <td>
                                <?php echo $row['customerNumber'] ?>
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