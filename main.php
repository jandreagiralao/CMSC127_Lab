<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>The Academe - Home</title>
    <link rel="shortcut icon" type="image/x-icon" href="./images/fist.png">

    <style>
        @import url('https://fonts.googleapis.com/css?family=PT+Sans|Righteous');

        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
            font-family: Arial, Helvetica, sans-serif;
            font-weight: normal;
        }

        body {
            background-size: cover;
            background: url(./images/back.jpeg);
            opacity: .9;
            color: white;
        }

        header {
            display: grid;
            grid-template-columns: 1fr 1fr;
            text-align: center;
            background: #08546C;
            margin-top: 10vh;
            padding: 15vh 0 15vh 0;
            width: 80%;
            margin-left: auto;
            margin-right: auto;
        }

        #header h6,
        #header h1 {
            text-align: justify;
            color: white;
        }

        #header,
        #header a {
            text-align: justify;
            text-decoration: none;
            font-size: 4vh;
            color: rgb(39, 114, 143);
            padding: 5px;
        }

        #header h6 {
            padding: 0 0 4vh 15vh;
        }

        #header h1 {
            padding: 8vh 0 3vh 15vh;
            font-size: 8.5vh;
        }

        #login {
            text-align: center;
            font-size: 2.5vh;
            padding: 5% 0 5% 15%;
            width: 80%;
        }

        #login input {
            background-color: rgba(255, 255, 255, 0);
            width: 80%;
            font-size: 2vh;
            margin: 3%;
            padding: 2.2%;
            color: white;
            border: none;
            border-bottom: 1.5px solid white;
            max-height: 5%;
            padding-left: 3%;
            text-align: left;
            border-radius: 0px;
            background-repeat: no-repeat;
        }

        #user:hover,
        #pass:hover {
            background-color: rgba(255, 255, 255, 0.288);
            border-radius: 8px;
            transition: all 0.3s ease;
        }

        #user:focus,
        #pass:focus {
            background-color: rgba(255, 255, 255, 0.13);
            border-radius: 8px;
            outline: none;
        }

        a#apply {
            font-size: 2vh;
            padding: 2% 4% 2% 4%;
            margin-left: 17%;
        }

        input#submit {
            padding: 3% 5% 3% 5%;
        }

        input#submit,
        a#apply {
            background-color: #A0BACC;
            color: black;
            text-decoration: none;
            border: none;
            text-align: center;
            font-family: sans-serif;
            border-radius: 5px;
            outline: none;
        }

        a#apply:hover,
        input#submit:hover {
            color: white;
            background-color: #0d5c75;
            transition: all 0.3s ease;
        }

        textarea:focus,
        input:focus {
            color: #ff0000;
        }

        input,
        select,
        textarea {
            color: #000;
        }

        ::placeholder {
            color: white;
            opacity: .5;
        }

        @keyframes size {
            0 {
                padding: 2vh;
            }

            50% {
                padding: 2.3vh;
            }

            100% {
                padding: 2vh;
            }
        }
    </style>
</head>

<body>
    <header>
        <section id="header">
            <h1>The Academe</h1>
            <h6>Are you a nine-year-old?<br>
                Meet other intellectuals.</h6>
            <a href="./apply.php" id="apply">Apply Now</a>
        </section>
        <section id="login">
            <h2>Account Login</h2><br><br>
            <form action="./viewXdelete.php" method="post">
                <input type="text" name="username" value="" id="user" placeholder="Username" autocomplete="off" required><br>
                <input type="password" name="password" value="" id="pass" placeholder="Password" autocomplete="off" required>
                <br><br><br> <input type="submit" name="submit" value="Log in" id="submit">
            </form>
        </section>
    </header>

    <script type="text/javascript">
        document.getElementById("submit").addEventListener("click", function() {
            user = document.getElementById("user").value
            pass = document.getElementById("pass").value

            if ((user != "admin" || pass != "admin") && (user != "" && pass != ""))
                alert("Username/password doesn't match")
        })
    </script>
</body>

</html>