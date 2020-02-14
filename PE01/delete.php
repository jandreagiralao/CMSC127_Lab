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
	<title>Update - Result</title>
	<link rel="stylesheet" type="text/css" href="./delview.css">
	<link rel="stylesheet" href="./nav.css">
</head>
<body>
	<div id="nav">
		<a href="./main.php">LOGOUT</a>
		<p>You are in the Applicants Page - Signed in as admin</p>
		<form action="./viewXdelete.php" method="post">
			<input name ='username' type = 'hidden' value = "admin">
			<input name ='password' type = 'hidden' value = "admin">
			<input id='delete' type="submit" value="Go back to the list of applicants.">
		</form>
	</div>
	<section id="container">
		<section id="result">

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
				$sName = $_POST['colName']; 

				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql = "DELETE FROM info WHERE sName = '$sName'";
				$result = $conn->query($sql); 

				if ($conn->query($sql) === TRUE)
					echo "<br><br><br><br><br><br><h2 style='color: red;'>Data deleted successfuly.</h2>"; 
				else 
					echo "<br><br><br><br><br><br><h2 style='color: red;'>Error deleting data: " .$conn->error. "</h2>";
				$conn->close();
			?>
		</section>
	</section>
</body>
</html>

