<?php
session_start();

    include("connection.php");
    include("functions.php");

    if($_SERVER['REQUEST_METHOD'] == "POST")
    {
        //er is iets ingevuld
       $user_name = $_POST['user_name'];
       $password =  $_POST['password'];

       if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
       {
            //opgeslagen in de database
            $user_id = random_num(20);
            $query = "insert into users (user_id, user_name, password) values ('$user_id', '$user_name', '$password')";

            mysqli_query($con, $query);

            header("Location: login.php");

       }else{
           echo "Please enter some valid information";
       }
    }

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/login.css">
    <title>Signup</title>
</head>
<body>

<article class="box">

    <form method="post">
        <label>New User Name</label>
        <input type="text" name="user_name"><br><br>

        <label>New Password</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="SignUp"><br><br>

        <a href="login.php">Click to Login</a><br><br>
    </form>

    </article>
    
</body>
</html>