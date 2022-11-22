<?php include('C:\xampp\htdocs\ForNowUpload\Recorces\adminResorces\adminlogin.php') ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <style>
        body{
    background: linear-gradient(90deg, rgb(31, 31, 31), rgb(1, 14, 54), rgb(10, 31, 0), rgb(59, 33, 0));
    text-align: center;
        }
        .container{
            width: 300px;
            margin:200px auto;
            text-align: center;
        }
        form{
            display: grid;
        }
        form input{
            padding: 9px;
            margin: 10px;
        }
        span{
            color: gold;
        }
        h1{
            color: white;
        }
    </style>
</head>
<body>
    <br><div class="container">
        <h1>One <span>Change</span></h1>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Username">
            <input type="password" name="password" placeholder="Password">
            <input type="submit" value="Login" name="login">
        </form>
    </div>
</body>
</html>