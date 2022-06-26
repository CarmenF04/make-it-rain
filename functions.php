<?php

function dbConnect()
{

    //Laad de database gegevens uit het config bestand
    $db = require(__DIR__ . '/config.php');

    try {
        // Hier maken we de database verbinding
        $connection = new PDO("mysql:host=" . $db['server'] . ";dbname=" . $db['database'] . ";port=" . $db['port'], $db['username'], $db['password']);

        // Database verbindings opties instellen
        $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $connection->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

        return $connection;
        
    } catch (PDOException $error) {
        echo "Verbinding niet gemaakt: " .  $error->getMessage();
        exit;
    }
}

function check_login($con)
{

    if(isset($_SESSION['user_id']))
    {

        $id = $_SESSION['user_id'];
        $query = "select * from users where user_id = '$id' limit 1";

        $result = mysqli_query($con, $query);
        if($result && mysqli_num_rows($result) > 0)
        {
            $user_data = mysqli_fetch_assoc($result);
            return $user_data;
        }
    }

    // ga terug naar de login
    header("Location: login.php");
    die;

}

function random_num($length)
{

    $text = "";
    if($length < 5)
    {
        $length = 5;
    }

    $len = rand(4, $length);

    for ($i=0; $i < $len; $i++) {

        $text .= rand(0,9);
    }

    return $text;
}

function isEmpty($value){
    return empty($value);
}


function isValidEmail($value){

    $cleaned = filter_var($value, FILTER_SANITIZE_EMAIL);
    if($cleaned == false){
        return false;
    }

    return filter_var($cleaned, FILTER_VALIDATE_EMAIL);
}

function hasMinLength($value, $min_length)
{

    $length = strlen($value);
    if ($length >= $min_length){
    return true;
}
    return false;
}
