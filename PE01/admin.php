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
        <link rel="stylesheet" type="text/css" href="./admin.css">
    </head>

    <body>
        <form action="./viewXdelete.php" method="post">
            <input name='username' type='hidden' value="admin">
            <input name='password' type='hidden' value="admin">
            <input id='delete' type="submit" value="View applicant's page">
        </form>

        <div class="dropdown">
            <button>Manage</button>
            <div class="dropdown-list">
                <form action="#" method="post">
                    <input name='username' type='hidden' value="admin">
                    <input name='password' type='hidden' value="admin">
                    <input id='' type="submit" value="Education">
                </form>
                <form action="#" method="post">
                    <input name='username' type='hidden' value="admin">
                    <input name='password' type='hidden' value="admin">
                    <input id='' type="submit" value="Scholarship">
                </form>
                <form action="#" method="post">
                    <input name='username' type='hidden' value="admin">
                    <input name='password' type='hidden' value="admin">
                    <input id='' type="submit" value="Major Field">
                </form>
            </div>
        </div>
    </body>
</html>