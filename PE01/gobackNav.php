<?php 
    if($_SESSION["what"] == "managing" || $_SESSION["what"] == "in") {
?>
    <form action="./admin.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="Go Back to Admin Page">
    </form>
<?php 
    } elseif($_SESSION["where"] == "'s") {
?>
    <form action="./viewXdelete.php" method="post">
        <input name ='username' type = 'hidden' value = "admin">
        <input name ='password' type = 'hidden' value = "admin">
        <input id='delete' type="submit" value="Go Back to the List of Applicants">
    </form>
<?php
    }
?>