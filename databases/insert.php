<?php
include 'connect.php';

$full_names = "Pappy Boyshokan";
$email = "doe@gmail.com";
$gender = "Male";
$dob = "2000-02-02";
$country = "Naija";


$query = "INSERT INTO Students (`full_names`, `email`, `gender`, `country`, `dob`) 
                            VALUES ('$full_names','$email', '$gender','$country', '$dob');";

if (mysqli_query($conn, $query)) {
    echo "Done";
} else {
    echo "Error";
}