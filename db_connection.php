<?php
$hostname= "localhost";
$username= "root";
$password= "";
$database="bookwormsociety";

// Create a connection
if(!$con = mysqli_connect($hostname, $username, $password, $database))
{
   die("failed to connect!");
}

