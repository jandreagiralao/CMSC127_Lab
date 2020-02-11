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

<body>
    <form action="./viewXdelete.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="View applicant's page">
    </form>

    <div id="manage">
        <form action="./educ.php" method="post">
            <input name='username' type='hidden' value="admin">
            <input name='password' type='hidden' value="admin">
            <input id='educ' type="submit" value="Education">
        </form>

        <form action="./educ.php" method="post">
            <input name='username' type='hidden' value="admin">
            <input name='password' type='hidden' value="admin">
            <input id='educ' type="submit" value="Scholarship">
        </form>

        <form action="./educ.php" method="post">
            <input name='username' type='hidden' value="admin">
            <input name='password' type='hidden' value="admin">
            <input id='educ' type="submit" value="Major Field">
        </form>
    </div>
</body>

</html>