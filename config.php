<?php
if(isset($_POST['user_name']) && isset($_POST['password'])){

// CHECK IF FIELDS ARE NOT EMPTY
    if(!empty(trim($_POST['user_name'])) && !empty(trim($_POST['password']))){

// Escape special characters.
        $user_name= mysqli_real_escape_string($db_connection, htmlspecialchars(trim($_POST['user_name'])));

        $query = mysqli_query($db_connection, "SELECT * FROM `users` WHERE user_name = '$user_name'");

        if(mysqli_num_rows($query) > 0){

            $row = mysqli_fetch_assoc($query);
            $user_db_pass = $row['password'];

// VERIFY PASSWORD
            $check_password = password_verify($_POST['password'], $user_db_pass);

            if($row['password'] === $_POST['password'] ){
                echo $row['password'];
                echo  $_POST['password'];
                session_regenerate_id(true);

                $_SESSION['user_name'] = $user_name;
                header('Location: home.php');
                exit;

            }
            else{
// INCORRECT PASSWORD
                $error_message = "Incorrect Email Address or Password.";

            }

        }
        else{
// EMAIL NOT REGISTERED
            $error_message = "Incorrect Email Address or Password.";
        }

    }
    else{

// IF FIELDS ARE EMPTY
        $error_message = "Please fill in all the required fields.";
    }

}
?>

