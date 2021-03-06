<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION["username"] = $_REQUEST["username"];
    $_SESSION["password"] = $_REQUEST["password"];
}

if ($_SESSION["username"] != "admin" || $_SESSION["password"] != "admin") {
    header("Location: ./main.php");
}

unset($_SESSION["username"]);
unset($_SESSION["password"]);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result - Update Education Table</title>
</head>
<body>
    <form action="./manage_scholar.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="View Manage Scholarship Page">
    </form>

    <div class="container">
    		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "applicants";
			
			$id = $_POST['colName']; 
			$field = $_POST['field'];
			
			if ( $field == "sID" )
				$newdata = $_POST['newVal']; // newdata that will be assigned to type
			else if ($field == "scholarship")
				$newdata = $_POST['newVal'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: ".$conn->connect_error);
			}

			$sql = "UPDATE `scholarship` SET `$field` = '$newdata' WHERE `scholarship` = '$id'";

			if ($conn->query($sql) === TRUE)
				echo "<h2 style='color: red;'>Record updated successfully</h2>";
			else
				echo "<h2 style='color: red;'>Error updating record: " . $conn->error."</h2>"	;

			$conn->close();
		?>
    </div>
</body>
</html>