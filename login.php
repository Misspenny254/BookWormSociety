<?php
session_start();
require 'db_connection.php';
require 'config.php';
// IF USER LOGGED IN
if(isset($_SESSION['user_name'])){
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
   
    <style>
        body{
            background-color: white;
        }
        h2{
            font-family: Montserrat,serif;
            font-size: 16px;
            text-align: center;
        }
        #text{
            height:25px ;
            border-radius: 5px;
            padding: 10px;
            margin auto;
            border: solid thin #aaa
            font-family: Montserrat,serif;
            font-size: 16px;
            width: 100%;

        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color:#470415 ;
            border: none;
        }
        .box{
            background-color: #30d5c8;
            margin: auto;
            width: 300px;
            padding: 40px;

        }
    </style>
</head>

<body>

<form action="" method="post">
    <h2>User Login</h2>

    <div class="box">
        <label id=text for="name"><b>Email</b></label>
        <input type="text" placeholder="Enter name" id="name" name="user_name" required>

        <label id= text for="password"><b>Password</b></label>
        <input type="password" placeholder="Enter password" id="password" name="password" required>

        <button id=button type="submit">Login</button>
    </div>
    <?php
    if(isset($success_message)){
        echo '<div class="success_message">'.$success_message.'</div>';
    }
    if(isset($error_message)){
        echo '<div class="error_message">'.$error_message.'</div>';
    }
    ?>
    <div class="container" style="background-color:#f1f1f1">
        <!--<a href="signup.php"><button type="button" class="Regbtn">Create an account</button></a>-->
    </div>
</form>
</body>
</html>












