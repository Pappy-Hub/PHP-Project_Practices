<?php
// conecting to a dabase
//define credentials
$dbServername = "localhost";  //127.0.0.1
$dbUsername = "root";
$dbPassword = "";
$dbName = "loginsystem";

//create connection
$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);
//check connection
if (!$conn) {
    die("Database connection failed: ");
} else {
    echo "Connected to database successfully";
}


// if ($conn->connect_error) {
//     die("Database connection failed: " . $conn->connect_error);
// } else {
//     echo "Connected to database successfully";
// }