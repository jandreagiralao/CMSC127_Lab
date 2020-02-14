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
        <title>The Academe - Admin Page</title>
        <link rel="shortcut icon" type="image/x-icon" href="./images/fist.png">
        <link rel="stylesheet" type="text/css" href="./admin.css">
        <link rel="stylesheet" href="./nav.css">
    </head>

    <body>
        <div id="nav">
            <a href="./main.php">LOGOUT</a>
            <p>Welcome to the Admin Page - Signed in as admin</p>
        </div>

        <div class="grid_2">
            <div class="view">
                <form action="./viewXdelete.php" method="post">
                    <input name='username' type='hidden' value="admin">
                    <input name='password' type='hidden' value="admin">
                    <input id='button' type="submit" value="VIEW APPLICANTS PAGE">
                </form> 
            </div>
            

            <div class="dropdown">
                <button id="button">MANAGE</button>
                <div class="dropdown-list">
                    <form action="./manage_educ.php" method="post">
                        <input name='username' type='hidden' value="admin">
                        <input name='password' type='hidden' value="admin">
                        <input id='option' type="submit" value="EDUCATION">
                    </form>
                    <form action="#" method="post">
                        <input name='username' type='hidden' value="admin">
                        <input name='password' type='hidden' value="admin">
                        <input id='option' type="submit" value="SCHOLARSHIP">
                    </form>
                    <form action="#" method="post">
                        <input name='username' type='hidden' value="admin">
                        <input name='password' type='hidden' value="admin">
                        <input id='option' type="submit" value="MAJOR FIELD">
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>