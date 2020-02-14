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
	<title>Add to Education Table</title>
	<link rel="stylesheet" type="text/css" href="./admin.css">
</head>
<body>
    <form action="./manage_scholar.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="Back to Manage Scholarship Page">
    </form>

    <div class="container">
    	<form class = "add_form" action="#" method="post">
				<p>Scholarship ID</p>
				<input type="text" name="sID" required> <br>
				<p>Scholarship Name</p>
				<input type="text" name="scholarship" required> <br>
				<input name='username' type='hidden' value="admin">
        		<input name='password' type='hidden' value="admin">
				<input type="submit" name="submit" value="Submit">
			</form>
    </div>
</body>
</html>