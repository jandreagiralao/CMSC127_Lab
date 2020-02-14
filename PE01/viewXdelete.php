<?php
	session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
		$_SESSION["username"] = $_REQUEST["username"];
		$_SESSION["password"] = $_REQUEST["password"];
	}

	if ($_SESSION["username"] != "admin" || $_SESSION["password"] != "admin") {
		header("Location: ./main.php");
	}

	$_SESSION["what"] = "in";
	$_SESSION["where"] = " the Applicants";
?>

<!DOCTYPE html>
<html>

<head>
	<title>The Academe - Applicants List</title>
	<link rel="shortcut icon" type="image/x-icon" href="./images/fist.png">
	<link rel="stylesheet" type="text/css" href="./delview.css">
	<link rel="stylesheet" href="./nav.css">
</head>

<body>
	<div id="nav">
		<?php include 'navbar.php' ?>
		<?php include 'gobackNav.php' ?>
	</div>
	
	<section id="container">
		<section id="content">
			<?php
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
			$sql = "SELECT * from info ORDER BY sName ASC";
			$result = $conn->query($sql);
			?>

			<table>
				<tr>
					<col>
					<colgroup span="2"></colgroup>

				<tr>
					<th colspan="3" scope="colgroup">Applicant's Name</th>
					<th rowspan="2"></th>
					<th rowspan="2"></th>
				</tr>


				<tr>
					<th>First Name</th>
					<th>Middle Name</th>
					<th>Last Name</th>
				</tr>

				<?php
				if ($result->num_rows > 0) {
					// output data of each row
					while ($row = $result->fetch_assoc()) {
				?>
						<tr>
							<td>
								<?php echo $row['fName'] ?>
							</td>
							<td>
								<?php echo $row['mName'] ?>
							</td>
							<td>
								<?php echo $row['sName'] ?>
							</td>
							<td>
								<form id='view' method="POST" action="./view.php">
									<?php echo "<input name ='colName' type = 'hidden' value = '" . $row['sName'] . "'>"; ?>
									<input name='username' type='hidden' value="admin">
									<input name='password' type='hidden' value="admin">
									<input id='view' type="submit" value="View Applicant">
								</form>
							</td>
							<td>
								<form id='delete' method="POST" action="./delete.php">
									<?php echo "<input name ='colName' type = 'hidden' value = '" . $row['sName'] . "'>"; ?>
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
		</section>
	</section>
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>