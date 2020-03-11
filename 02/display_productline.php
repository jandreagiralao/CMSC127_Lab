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
            $sql = "SELECT * from productlines ORDER BY productLine ASC";
            $result = $conn->query($sql);
            ?>

            <table>
                <tr>
                    <th>Product Line</th>
                    <th>Text Description</th>
                    <th>HTML Description</th>
                    <th>Image</th>
                </tr>

                <?php
                if ($result->num_rows > 0) {
                    // output data of each row
                    while ($row = $result->fetch_assoc()) {
                ?>
                        <tr>
                            <td>
                                <?php echo $row['productLine'] ?>
                            </td>
                            <td>
                                <?php echo $row['textDescription'] ?>
                            </td>
                            <td>
                                <?php echo $row['htmlDescription'] ?>
                            </td>
                            <td>
                                <?php echo $row['image'] ?>
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