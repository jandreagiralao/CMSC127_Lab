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
	<title>Result - Delete from Education Table</title>
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

			// Create connection
			$conn = new mysqli($servername, $username, $password, $dbname);
			
			// Check connection
			if ($conn->connect_error) {
				die("Connection failed: ".$conn->connect_error);
			}

			//getting id of the data from url
			$id = $_POST['colName']; 

			$conn = new mysqli($servername, $username, $password, $dbname);
			$sql = "DELETE FROM education WHERE lvl = '$id'";
			$result = $conn->query($sql); 

			if ($conn->query($sql) === TRUE)
				echo "<h2 style='color: red;'>Data deleted successfuly.</h2>"; 
			else 
				echo "<h2 style='color: red;'>Error deleting data: " .$conn->error. "</h2>";
			$conn->close();
		?>
	</div>
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>
</html>