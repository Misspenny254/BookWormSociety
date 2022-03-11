
<?php
session_start();
include("db_connection.php");
include("functions.php");

if ($_SERVER['REQUEST_METHOD'] =="POST")
{
    //Something was posted
    $user_name= $_POST['user_name'];
    $password= $_POST['Password'];

    if(!empty($user_name) && !empty($password) &&!is_numeric($user_name));

    {
        //save to database
        $user_id = random_num(30);
        $query = "insert into users (user_id,user_name,password) values ('$user_id','$user_name','$password')";

        mysqli_query($con, $query);

        header("Location: login.php");
    }
    else{
        echo"please enter some valid information!";
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
</head>
<body>
<div id="box">
    <form action="post">
        <div style="font-size:16px;margin: 10px;">Login</div>

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


