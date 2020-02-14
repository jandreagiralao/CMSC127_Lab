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
	<title>The Academe - Applicant Profile</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/fist.png">
	<link rel="stylesheet" type="text/css" href="./delview.css">
	<link rel="stylesheet" href="./nav.css">
</head>

<body>
	<?php
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "applicants";
		//getting id of the data from url
		$sName = $_POST['colName'];  
		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);
		// Check connection
		/*
		if (mysqli_connect_error())
			die("Connection failed: ".mysqli_connect_error());
		else echo "Connected successfully <br>";
		*/
		
		$sql = "SELECT * from info WHERE sName = '$sName' ";
		$result = $conn->query($sql); 
	?> 

	<?php
		if ($result->num_rows > 0) {
			// output data of each row
			while($row = $result->fetch_assoc()) { 
	?>

	<div id="nav">
		<a href="./main.php">LOGOUT</a>
		<p>You are in <?php echo $row['fName'] ?> <?php echo $row['sName'] ?>'s Profile - Signed in as admin</p>
		<form action="./viewXdelete.php" method="post">
			<input name ='username' type = 'hidden' value = "admin">
			<input name ='password' type = 'hidden' value = "admin">
			<input id='delete' type="submit" value="Go back to the list of applicants.">
		</form>
	</div>
	
	
	<section id="container">
		<section id="result">
			<section id="title">
                <h1>PERSONAL DATA SHEET</h1><br>
            </section>

            <section id="personal">	
            	<section class="title">
                    <p>I. PERSONAL INFORMATION</p>
                </section>

				<section>
					<span class="label left">SURNAME</span>
					<span class="res">
                        	<?php echo $row['sName'] ?>
                    </span> 

					<span class="label mid">FIRST NAME</span>
					<span class="res">
                        	<?php echo $row['fName'] ?>
                    </span> 

                    <span class="label mid">MIDDLE NAME</span>
					<span class="res">
                        	<?php echo $row['mName'] ?>
                    </span>

                    <span class="label right">NAME EXTENSION</span>
					<span class="res">
                        	<?php echo $row['fNameExt'] ?>
                    </span>
				</section>

				<section>
					<span class="label left">SEX</span>
					<span class="res">
                        	<?php echo $row['sex'] ?>
                    </span>

					<span class="label mid">BIRTH DATE</span>
					<span class="res">
                        	<?php echo $row['birthday'] ?>
                    </span>

                    <span class="label right">BIRTH PLACE</span>
					<span class="res">
                        	<?php echo $row['birthplace'] ?>
                    </span>
				</section>
					
				<section>
					<span class="label left">CIVIL STATUS</span>
					<span class="res">
                        	<?php echo $row['cStatus'] ?>
                    </span>

                    <span class="label mid">HEIGHT</span>
					<span class="res">
                        	<?php echo $row['height'] ?>
                    </span>

                    <span class="label mid">WEIGHT</span>
					<span class="res">
                        	<?php echo $row['weight'] ?>
                    </span>

                    <span class="label right">BLOOD TYPE</span>
					<span class="res">
                        	<?php echo $row['bType'] ?>
                    </span>
				</section>

				<section>
					<span class="label left">CITIZENSHIP</span>
					<span class="res">
                        	<?php echo $row['citizenship'] ?>
                    </span>

                    <span class="label mid">TYPE OF CITIZENSHIP</span>
					<span class="res">
                        	<?php echo $row['citType'] ?>
                    </span>
				</section>

				<section>
					<span>RESIDENTIAL ADDRESS</span><br>
					<span class="label left">HOUSE NO.</span>
					<span class="res">
                        	<?php echo $row['house'] ?>
                    </span>

                    <span class="label mid">STREET</span>
					<span class="res">
                        	<?php echo $row['street'] ?>
                    </span>

                    <span class="label mid">SUBDIVISION</span>
					<span class="res">
                        	<?php echo $row['subdivision'] ?>
                    </span>

					
				</section>	

				<section>
					<span class="label left">BARANGAY</span>
					<span class="res">
                        	<?php echo $row['barangay'] ?>
                    </span>

                    <span class="label mid">CITY</span>
					<span class="res">
                        	<?php echo $row['city'] ?>
                    </span>

                    <span class="label right">PROVINCE</span>
					<span class="res">
                        	<?php echo $row['province'] ?>
                    </span>

                    <span class="label right">ZIP</span>
					<span class="res">
                        	<?php echo $row['zip'] ?>
                    </span>
				</section>	


				<section>
					<span>PERMANENT ADDRESS</span><br>
					<span class="label left">HOUSE NO.</span>
					<span class="res">
                        	<?php echo $row['phouse'] ?>
                    </span>

                    <span class="label mid">STREET</span>
					<span class="res">
                        	<?php echo $row['pstreet'] ?>
                    </span>

                    <span class="label mid">SUBDIVISION</span>
					<span class="res">
                        	<?php echo $row['psubdivision'] ?>
                    </span>


				</section>	

				<section>
					<span class="label left">BARANGAY</span>
					<span class="res">
                        	<?php echo $row['pbarangay'] ?>
                    </span>

                    <span class="label mid">CITY</span>
					<span class="res">
                        	<?php echo $row['pcity'] ?>
                    </span>

                    <span class="label mid">PROVINCE</span>
					<span class="res">
                        	<?php echo $row['pprovince'] ?>
                    </span>

                    <span class="label right">ZIP</span>
					<span class="res">
                        	<?php echo $row['pzip'] ?>
                    </span>
				</section>	

				<section>
					<span>CONTACT DETAILS</span><br>
					<span class="label left">TELEPHONE NO.</span>
					<span class="res">
                        	<?php echo $row['telephone'] ?>
                    </span>

                    <span class="label mid">MOBILE NO.</span>
					<span class="res">
                        	<?php echo $row['mobile'] ?>
                    </span>

                    <span class="label right">EMAIL</span>
					<span class="res">
                        	<?php echo $row['email'] ?>
                    </span>
				</section>	

				<section>
					<span>IDs</span><br>
					<span class="label left">GSIS ID NO.</span>
					<span class="res">
                        	<?php echo $row['gsis'] ?>
                    </span>

                    <span class="label mid">PAG-IBIG ID NO.</span>
					<span class="res">
                        	<?php echo $row['pagibig'] ?>
                    </span>

                    <span class="label right">PHILHEALTH NO.</span>
					<span class="res">
                        	<?php echo $row['philhealth'] ?>
                    </span>
				</section>	

				<section>
					<span class="label left">SSS NO.</span>
					<span class="res">
                        	<?php echo $row['sss'] ?>
                    </span>

                    <span class="label mid">TIN NO.</span>
					<span class="res">
                        	<?php echo $row['tin'] ?>
                    </span>

                    <span class="label right">AGENCY NO.</span>
					<span class="res">
                        	<?php echo $row['agency'] ?>
                    </span>
				</section>	

            </section>

			 <?php 
			        	}   	
			  		} 
			  	else echo "Database is empty"; 
			        $conn->close(); 
		    ?>

		</section>
	</section>	
</body>

</html>
