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
	<title>Add to Major Field Table</title>
</head>
<body>
    <form action="./manage_major.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="Back to Manage Major Field Page">
    </form>

    <div class="container">
    	<form class = "add_form" action="adder_major.php" method="post">
				<p>Ed ID</p>
				<input type="text" name="majorID" required> <br>
				<p>Level</p>
				<input type="text" name="majorField" required> <br>
				<input name='username' type='hidden' value="admin">
        		<input name='password' type='hidden' value="admin">
				<input type="submit" name="submit" value="Submit">
			</form>
	</div>
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>
</html>