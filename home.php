<?php
session_start();
require 'db_connection.php';
// CHECK USER IF LOGGED IN
if(isset($_SESSION['user_name']) && !empty($_SESSION['user_name'])){

    $user_name = $_SESSION['user_name'];
    $get_user_data = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_name = '$user_name'");
    $userData =  mysqli_fetch_assoc($get_user_data);

}else{
    header('Location: logout.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" media="all" type="text/css">
    <title>Home</title>
    <style>
        a, a:visited{
            color: #0000EE;
        }
        a:hover{
            color: #EE0000;
        }
    </style>
</head>

<body id="home">
<div class="container">
    <h1>Hello, <?php echo $userData['user_name'];?></h1>
    
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
