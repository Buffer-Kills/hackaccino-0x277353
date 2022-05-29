<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Login</title>
    <?php
    if (isset($_COOKIE["location"])) {
        ob_start();
        $url = "welcome.php";
        header('Location: '.$url);
        ob_end_flush();
        die();
    }
    elseif(isset($_POST["college"]))
    {
        setcookie("location", $_POST["college"], time() + 30); // 60*60*24*365
        setcookie("name", $_POST["name"], time() + 30);
        ob_start();
        $url = "welcome.php";
        header('Location: '.$url);
        ob_end_flush();
        die();
    }

    ?>

    <style>
        @import url(https://fonts.googleapis.com/css?family=Roboto:300);

        .login-page {
            width: 360px;
            padding: 8% 0 0;
            margin: auto;
        }

        .form {
            position: relative;
            z-index: 1;
            background: #FFFFFF;
            max-width: 360px;
            margin: 0 auto 100px;
            padding: 45px;
            text-align: center;
            box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
            border-radius: 10px;
        }

        .form input {
            font-family: "Roboto", sans-serif;
            outline: 0;
            background: #f2f2f2;
            width: 100%;
            border: 0;
            margin: 0 0 15px;
            padding: 15px;
            box-sizing: border-box;
            font-size: 14px;
        }

        .form button {
            font-family: "Roboto", sans-serif;
            text-transform: uppercase;
            outline: 0;
            background: #f67b50;
            width: 100%;
            border: 0;
            padding: 15px;
            color: #FFFFFF;
            font-size: 14px;
            -webkit-transition: all 0.3 ease;
            transition: all 0.3 ease;
            cursor: pointer;
        }

        .form button:hover,
        .form button:active,
        .form button:focus {
            background: #f25a24;
        }

        .form .message {
            margin: 15px 0 0;
            color: #b3b3b3;
            font-size: 12px;
        }

        .form .message a {
            color: #4CAF50;
            text-decoration: none;
        }

        .form .register-form {
            display: none;
        }

        .container {
            position: relative;
            z-index: 1;
            max-width: 300px;
            margin: 0 auto;
        }

        .container:before,
        .container:after {
            content: "";
            display: block;
            clear: both;
        }

        .container .info {
            margin: 50px auto;
            text-align: center;
        }

        .container .info h1 {
            margin: 0 0 15px;
            padding: 0;
            font-size: 36px;
            font-weight: 300;
            color: #1a1a1a;
        }

        .container .info span {
            color: #4d4d4d;
            font-size: 12px;
        }

        .container .info span a {
            color: #000000;
            text-decoration: none;
        }

        .container .info span .fa {
            color: #EF3B3A;
        }

        

        select{
            border: 0px;
            color:grey;
        }

        h1{
            font-size: 120px;
            text-shadow: 5px 5px darkcyan;
            font-family: kunstler script;
            color: white;
        }

        body {
            background: #a4b4f5;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(right, #a4b4f5, #f67b50);
            background: -moz-linear-gradient(right, #a4b4f5, #f67b50);
            background: -o-linear-gradient(right, #a4b4f5, #f67b50);
            background: linear-gradient(to left, #a4b4f5, #f67b50);
            font-family: "Roboto", sans-serif;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
    </style>
</head>


<body>

<h1>
    <center>Food at Reach</center>
</h1>
    <div class="login-page">
        <div class="form">
            <form method="post">

                <label for="college">Choose a college:</label>

                <select class="slide" name="college" id="college">
                    <option value="null">Select college</option>
                    <option value="amity">Amity University</option>
                    <option value="bennett">Bennett University</option>
                    <option value="iitd">IIT Delhi</option>
                    <option value="du">Delhi University</option>

                </select>

                <br><br>
                <label for="college"></label>
                <input type="text" name="name" placeholder="Enter your name"> </input>
                <br>
                <Button type="submit"> Submit </Button>



            </form>

        </div>
    </div>

</body>

</html>