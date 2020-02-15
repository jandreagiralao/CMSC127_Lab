<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["username"] = $_REQUEST["username"];
		$_SESSION["password"] = $_REQUEST["password"];
	}

	if ($_SESSION["username"] != "admin" || $_SESSION["password"] != "admin") {
		header("Location: ./main.php");
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Result - Update Major Field Table</title>
</head>
<body>
    <form action="./manage_major.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="View Manage Major Field Page">
    </form>

    <div class="container">
    		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "applicants";
			
			$id = $_POST['colName']; 
			$field = $_POST['field'];
			
			if ( $field == "majorID" )
				$newdata = $_POST['newVal']; // newdata that will be assigned to type
			else if ($field == "majorField")
				$newdata = $_POST['newVal'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: ".$conn->connect_error);
			}

			$sql = "UPDATE `majorfield` SET `$field` = '$newdata' WHERE `majorField` = '$id'";

			if ($conn->query($sql) === TRUE)
				echo "<h2 style='color: red;'>Record updated successfully</h2>";
			else
				echo "<h2 style='color: red;'>Error updating record: " . $conn->error."</h2>"	;

			$conn->close();
		?>
	</div>
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>
</html>