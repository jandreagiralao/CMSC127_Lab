<!DOCTYPE html>
<html>

<head>
    <title></title>
</head>

<body>
    <div class="container">
        <?php

        if ($_SERVER["REQUEST_METHOD"] == "POST")
            connect();

        function connect(){
            $error_msg = "";
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "classicmodels";
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            /*
					if (mysqli_connect_error())
						die("Connection failed: ".mysqli_connect_error());
					else echo "Connected successfully <br>";
					*/
            $productLine = $_POST['productLine'];
            $textDescription = $_POST['textDescription'];
            $htmlDescription = $_POST['htmlDescription'];
            //Image
              $name = $_FILES['image']['name'];
              $target_dir = "upload/";
              $target_file = $target_dir . basename($_FILES["image"]["name"]);

              // Select file type
              $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

              // Valid file extensions
              $extensions_arr = array("jpg","jpeg","png","gif");

              // Check extension
              if( in_array($imageFileType,$extensions_arr) ){

                 // Insert record
                 $query = "insert into images(name) values('".$name."')";
                 mysqli_query($conn,$query);

                 // Upload file
                 $image = move_uploaded_file($_FILES['image']['tmp_name'],$target_dir.$name);

                 //insert values to table
                 $sql = "INSERT INTO productlines VALUES ('$productLine', '$textDescription', '$htmlDescription', '$image')";

                 if ($conn->query($sql) === TRUE)
                     echo "<h2 style='color: red;'>Data inserted successfuly.</h2>";
                 else
                     echo "<h2 style='color: red;'>Error adding data:" . $conn->error . "</h2>";
                 $conn->close();
              }
        }
        ?>
    </div>
</body>
</html>
