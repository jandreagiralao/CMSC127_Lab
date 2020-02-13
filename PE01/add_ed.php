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
    <form action="./manage_educ.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="Back to Manage Education Page">
    </form>

    <div class="container">
    	<form class = "add_form" action="add.php" method="post">
				<p>Ed ID</p>
				<input type="text" name="edID" required> <br>
				<p>Level</p>
				<input type="text" name="lvl" required> <br>
				<input name='username' type='hidden' value="admin">
        		<input name='password' type='hidden' value="admin">
				<input type="submit" name="submit" value="Submit">
			</form>
    </div>
</body>
</html>