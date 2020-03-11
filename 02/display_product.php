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
            $sql = "SELECT * from products ORDER BY productCode ASC";
            $result = $conn->query($sql);
            ?>

            <table>
                <tr>
                    <th>Product Code</th>
                    <th>Product Name</th>
                    <th>Product Line</th>
                    <th>Product Scale</th>
                    <th>Product Vendor</th>
                    <th>Product Description</th>
                    <th>Quantity in Stock</th>
                    <th>Buy Price</th>
                    <th>MSRP</th>
                    <th>
                        <form action="./create_product.php" method="post">
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
                                <?php echo $row['productCode'] ?>
                            </td>
                            <td>
                                <?php echo $row['productName'] ?>
                            </td>
                            <td>
                                <?php echo $row['productLine'] ?>
                            </td>
                            <td>
                                <?php echo $row['productScale'] ?>
                            </td>
                            <td>
                                <?php echo $row['productVendor'] ?>
                            </td>
                            <td>
                                <?php echo $row['productDescription'] ?>
                            </td>
                            <td>
                                <?php echo $row['quantityInStock'] ?>
                            </td>
                            <td>
                                <?php echo $row['buyPrice'] ?>
                            </td>
                            <td>
                                <?php echo $row['MSRP'] ?>
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