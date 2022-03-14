
<?php
session_start();
include("db_connection.php");
include("functions.php");

$user_data= check_login($con);

if ($_SERVER['REQUEST_METHOD'] =="POST") {
    //Something was posted
    $user_name = $_POST['user_name'];
    $password = $_POST['Password'];

    if (!empty($user_name) && !empty($password) && !is_numeric($user_name));

    {
        //save to database
        $user_id = random_num(20);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
        die;
    }
    else
    {
        echo "please enter some valid information!";
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>SignUp</title>
    <style>
        body{
            background-color: white;
        }
        h1{
            font-family: Montserrat,serif;
            font-size: 16px;
            text-align: center;
        }
        #text{
            height:25px ;
            border-radius: 5px;
            padding: 4px;
            border: solid thin #aaa;
        }
        #button{
            padding: 10px;
            width: 100px;
            color: white;
            background-color:#30d5c8 ;
            border: none;
        }
        #box{
            background-color: #470415;
            margin: auto;
            width: 300px;
            padding: 20px;
        }
    </style>
</head>
<body>
<h1>Please Sign up Here</h1>
<div id="box">
    <form method="post">
        <div style="font-size:16px;margin: 10px;">Sign up</div>

        <label for="text"><b>User name</b></label>
        <input id="text"  type="text" placeholder="Enter name" name="user_name" required><br><br>

        <label for="password"><b>password</b></label>
        <input id="text" type="text" placeholder="Enter name" name="password" required><br><br>

        <input id="button" type="submit" value="login"><br><br>

        <a href="login.php"> Click to Login</a><br><br>
    </form>
</div>
</body>
</html>


