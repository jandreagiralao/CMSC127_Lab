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
	<title></title>
</head>
<body>
	<form action="./manage_scholar.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
		<input id='delete' type="submit" value="Back to Manage Scholarship Page">
    </form>

	<div class="container">
		<?php

				if($_SERVER["REQUEST_METHOD"] == "POST") 
					connect();

				function connect(){
					$error_msg = "";
					$servername = "localhost";
					$username = "root";
					$password = "";
					$dbname = "applicants";
					// Create connection
					$conn = new mysqli($servername, $username, $password, $dbname);
					// Check connection
					/*
					if (mysqli_connect_error())
						die("Connection failed: ".mysqli_connect_error());
					else echo "Connected successfully <br>";
					*/
					$sID = $_POST['sID'];
					$scholarship = $_POST['scholarship'];

					//insert values to table
					$sql = "INSERT INTO scholarship VALUES ('$sID', '$scholarship')";

					if ($conn->query($sql) === TRUE)
						echo "<h2 style='color: red;'>Data inserted successfuly.</h2>"; 
					else 
						echo "<h2 style='color: red;'>Error adding data:" .$conn->error. "</h2>";
					$conn->close();
				}
			?>
	</div>
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>
</html>