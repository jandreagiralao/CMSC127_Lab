<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_REQUEST["username"];
    $_SESSION["password"] = $_REQUEST["password"];
}

if ($_SESSION["username"] != "admin" || $_SESSION["password"] != "admin") {
    header("Location: ./main.php");
}

$_SESSION["what"] = "managing";
$_SESSION["where"] = " the Major Field";
?>

<!DOCTYPE html>
<html>

<head>
    <title>The Academe - Manage Major Field Table</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/fist.png">
    <link rel="stylesheet" type="text/css" href="./admin.css">
    <link rel="stylesheet" type="text/css" href="./delview.css">
    <link rel="stylesheet" href="./nav.css">
</head>

<body>
    <div id="nav">
        <?php include 'navbar.php' ?>
        <?php include 'gobackNav.php' ?>
    </div>

    <div id="container">
        <?php
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "applicants";
        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        $sql = "SELECT * from majorfield";
        $result = $conn->query($sql);
        ?>

        <table>
            <tr>
                <thead>
                    <th>
                        <form action="./add_major.php" method="post">
                            <input name='username' type='hidden' value="admin">
                            <input name='password' type='hidden' value="admin">
                            <input id='' type="submit" value="Add">
                        </form>
                    </th>
                    <th>Major ID</th>
                    <th>Major Field</th>
                    <th></th>
                    <th></th>
                </thead>
            </tr>

            <?php
            if ($result->num_rows > 0) {
                // output data of each row
                while ($row = $result->fetch_assoc()) {
            ?>
                    <tr>
                        <td></td>
                        <td><?php echo $row['majorID'] ?> </td>
                        <td><?php echo $row['majorField'] ?> </td>
                        <td>
                            <form method="POST" action="update_major.php">
                                <select name="field">
                                    <option value="majorID">Major ID</option>
                                    <option value="majorField">Major Field</option>
                                </select>

                                <br>
                                <input name='username' type='hidden' value="admin">
                                <input name='password' type='hidden' value="admin">
                                <?php echo "<input name ='colName' type = 'hidden' value = '" . $row['majorField'] . "'>"; ?>
                                <input name="newVal" type="text">
                                <input type="submit" value="Update">
                            </form>
                        </td>

                        <td>
                            <form id='delete' method="POST" action="./delete_major.php">
                                <?php echo "<input name ='colName' type = 'hidden' value = '" . $row['majorField'] . "'>"; ?>
                                <input name='username' type='hidden' value="admin">
                                <input name='password' type='hidden' value="admin">
                                <input id='delete' type="submit" value="Delete">
                            </form>
                        </td>
                    </tr>
            <?php
                }
            } else echo "Database is empty";
            $conn->close();
            ?>
        </table>
    </div>
    <?php
    unset($_SESSION["username"]);
    unset($_SESSION["password"]);
    ?>
</body>

</html>