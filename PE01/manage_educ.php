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
	<title>Manage Education Table</title>
	<link rel="stylesheet" type="text/css" href="./admin.css">
</head>

<body>
    <form action="./admin.php" method="post">
        <input name='username' type='hidden' value="admin">
        <input name='password' type='hidden' value="admin">
        <input id='delete' type="submit" value="View Main Admin Page">
    </form>

    <div class="container">
    	<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "stocks";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql = "SELECT * from education";
		    	$result = $conn->query($sql); 
		    ?>  
			
			<table> 
	    		<tr>
	    			<thead>
			       		<th>EdID</th>
			       		<th>Level</th>
			       		<th>
			       			<form action="./add_educ.php" method="post">
				                <input name='username' type='hidden' value="admin">
				                <input name='password' type='hidden' value="admin">
				                <input id='' type="submit" value="Add">
			            	</form>
			       		</th>
					</thead>
			 	</tr>

			 	<?php
			       if ($result->num_rows > 0) {
			         // output data of each row
			         while($row = $result->fetch_assoc()) { 
			        	?>
			            <tr><td><?php echo $row['edID'] ?> </td>	
			            <td><?php echo $row['lvl'] ?> </td>	
			            <td>
			            	<form method = "POST" action = "update_educ.php">
									<select name = "field">
										<option value = "edID">EdID</option>
										<option value = "lvl">Level</option>
									</select>
										
									<br>
									
									<?php echo "<input name ='colName' type = 'hidden' value = '".$row['Symbol']."'>"; ?>
									<input name = "newVal" type = "text">
									<input type = "submit" value = "Update">
							</form>
			            </td>	
			            </tr>	 
				    <?php 
				         }   	
				  	   } 
				  	   else echo "Database is empty"; 
				        $conn->close(); 
			    ?>
			 </table>

    </div>
</body>
</html>