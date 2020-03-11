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
            $target_dir = "uploads/";
            $target_file = $target_dir . basename($_FILES["image"]["name"]);
            $uploadOk = 1;
            $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
            // Check if image file is a actual image or fake image
            if(isset($_POST["submit"])) {
                $check = getimagesize($_FILES["image"]["tmp_name"]);
                if($check !== false) {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } else {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }
            }
            // Check if file already exists
            if (file_exists($target_file)) {
                echo "Sorry, file already exists.";
                $uploadOk = 0;
            }
            // Check file size
            if ($_FILES["image"]["size"] > 500000) {
                echo "Sorry, your file is too large.";
                $uploadOk = 0;
            }
            // Allow certain file formats
            if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
            && $imageFileType != "gif" ) {
                echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
                $uploadOk = 0;
            }
            // Check if $uploadOk is set to 0 by an error
            if ($uploadOk == 0) {
                echo "Sorry, your file was not uploaded.";
            }

            //insert values to table
            $sql = "INSERT INTO productlines VALUES ('$productLine', '$textDescription', '$htmlDescription', '$target_file')";

            if ($conn->query($sql) === TRUE)
                echo "<h2 style='color: red;'>Data inserted successfuly.</h2>";
            else
                echo "<h2 style='color: red;'>Error adding data:" . $conn->error . "</h2>";
            $conn->close();
        }
        ?>
    </div>
</body>
</html>
