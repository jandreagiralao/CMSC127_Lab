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
	<title>Result - Update Education Table</title>
</head>
<body>
    <form action="./manage_educ.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="View Manage Education Page">
    </form>

    <div class="container">
    		<?php
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "applicants";
			
			$id = $_POST['colName']; 
			$field = $_POST['field'];
			
			if ( $field == "edID" )
				$newdata = $_POST['newVal']; // newdata that will be assigned to type
			else if ($field == "lvl")
				$newdata = $_POST['newVal'];

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: ".$conn->connect_error);
			}

			$sql = "UPDATE `education` SET `$field` = '$newdata' WHERE `lvl` = '$id'";

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