<?php
$hostname= "localhost";
$username= "root";
$password= "";
$database="bookwormsociety";

// Create a connection
if(!$db_connection = mysqli_connect($hostname, $username, $password, $database))
{
   die("failed to connect!");
}



