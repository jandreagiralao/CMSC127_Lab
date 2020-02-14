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
	<title>The Academe - Manage Education Table</title>
	<link rel="shortcut icon" type="image/x-icon" href="./images/fist.png">
	<link rel="stylesheet" type="text/css" href="./admin.css">
	<link rel="stylesheet" type="text/css" href="./delview.css">
	<link rel="stylesheet" href="./nav.css">
</head>

<body>
	<div id="nav">
		<a href="./main.php">LOGOUT</a> 
		<p>You are managing the Education Page - Signed in as <?php echo $_SESSION["username"] ?></p>
		<form action="./admin.php" method="post">
			<input name='username' type='hidden' value="admin">
			<input name='password' type='hidden' value="admin">
			<input id='delete' type="submit" value="Go Back to Admin Page.">
		</form>
	</div>

    <div id="container">
    	<?php
				$servername = "localhost";
				$username = "root";
				$password = "";
				$dbname = "applicants";
				// Create connection
				$conn = new mysqli($servername, $username, $password, $dbname);
				$sql = "SELECT * from education";
		    	$result = $conn->query($sql); 
		    ?>  
			
			<table> 
	    		<tr>
	    			<thead>
						<th>
			       			<form action="./add_ed.php" method="post">
				                <input name='username' type='hidden' value="admin">
				                <input name='password' type='hidden' value="admin">
				                <input id='' type="submit" value="Add">
			            	</form>
			       		</th>
			       		<th>EdID</th>
						<th>Level</th>
						<th></th>
						<th></th>   
					</thead>
			 	</tr>

			 	<?php
			       if ($result->num_rows > 0) {
			         // output data of each row
			         while($row = $result->fetch_assoc()) { 
			        	?>
			            <tr>
						<td></td>
						<td><?php echo $row['edID'] ?> </td>	
			            <td><?php echo $row['lvl'] ?> </td>	
			            <td>
			            	<form method = "POST" action = "update_educ.php">
									<select name = "field">
										<option value = "edID">EdID</option>
										<option value = "lvl">Level</option>
									</select>
										
									<br>
									<input name='username' type='hidden' value="admin">
        							<input name='password' type='hidden' value="admin">
									<?php echo "<input name ='colName' type = 'hidden' value = '".$row['lvl']."'>"; ?>
									<input name = "newVal" type = "text">
									<input type = "submit" value = "Update">
							</form>
			            </td>	

			            <td>
			            	<form id='delete' method="POST" action="./delete_educ.php">
									<?php echo "<input name ='colName' type = 'hidden' value = '" .$row['lvl']. "'>"; ?>
									<input name='username' type='hidden' value="admin">
									<input name='password' type='hidden' value="admin">
									<input id='delete' type="submit" value="Delete">
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
	<?php
		unset($_SESSION["username"]);
		unset($_SESSION["password"]);
	?>
</body>
</html>