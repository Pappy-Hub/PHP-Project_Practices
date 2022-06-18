<?php

// conecting to a dabase
//define credentials
$host = "127.0.0.1"; //"localhost"
$user = "root";
$password = "";
$db = "loginsolutions";

$conn = mysqli_connect($host, $user, $password, $db);
// if(!$conn){
//     die("Database connection failed: ");
// }
// else{
//     echo "Connected to database successfully";
// }



if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
} else {
    echo "Connected to database successfully";
}