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
	
</body>
</html>