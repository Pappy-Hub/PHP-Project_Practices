<?php
// print_r($_POST);

$name = $_POST['name']; //Where the Super_Global  $_POST is an Associative Array
$email = $_POST['email'];

echo 'NAME: ' . $name . "<br>";
echo 'EMAIL: ' . $email . "<br>";


?>