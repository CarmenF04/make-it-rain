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
            $query = "select * from users where user_name = '$user_name' limit 1";
            $result = mysqli_query($con, $query);


        if($result)
        {
            if($result && mysqli_num_rows($result) > 0)
            {
                $user_data = mysqli_fetch_assoc($result);
                
                if($user_data['password'] === $password)
                {

                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
            }
        }
    }    
            echo "wrong username or password!";
       }else
       {
            echo "wrong username or password!";
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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600;700&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <title>Log-In</title>
    <link rel="stylesheet" href="css/login.css">
</head>
<body>


<article class="box">

    <form method="post">
        <label>User Name</label>
        <input type="text" name="user_name" placeholder="voornaam en achternaam"><br><br>

        <label>Password</label>
        <input type="password" name="password" placeholder="wachtwoord"><br><br>

        <input class="login__button" type="submit" value="LOGIN"><br><br>

        <a href="signup.php">Click to Signup</a><br><br>
        <a class="return" href="index.php">Terug  naar de home pagina</a><br><br>
    </form>

    </article>
    
</body>
</html>