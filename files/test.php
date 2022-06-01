<?php

// $name = $_POST['name']; 
// $email = $_POST['email'];
// $dob = $_POST['dob'];
// $gender = $_POST['gender'];
// $country = $_POST['country'];

// echo 'NAME: ' . $name . "<br>";
// echo 'EMAIL: ' . $email . "<br>";
// echo 'DOB: ' . $dob . "<br>";
// echo 'GENDER: ' . $gender . "<br>";
// echo 'COUNTRY: ' . $country . "<br>";


// $file = "./userdata.csv"; //file path
// $handle = fopen($file, "a"); //open the file in a read mode
// fwrite($handle, "The rule is back!\n"); //Write to file
// fclose($handle); //close file

// print_r($_POST);

extract($_REQUEST); //file path
$file = fopen("userdata.csv", "a"); //open the file in a read mode

fwrite($file, "Name :");
fwrite($file, $name . "\n");
fwrite($file, "Email :");
fwrite($file, $email . "\n");
fwrite($file, "Date of birth :");
fwrite($file, $dob . "\n");
fwrite($file, "Gender :");
fwrite($file, $gender . "\n");
fwrite($file, "Country :");
fwrite($file, $country . "\n");


// fwrite($handle, "Pappy is the man"); //Write to file


fclose($file); //close file
