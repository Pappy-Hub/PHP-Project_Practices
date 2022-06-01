<?php
// print_r($_GET);

$num1 = $_GET['num1']; //Where the Super_Global  $_GET is an Associative Array
$num2 = $_GET['num2'];


$sum = $num1 + $num2;
$difference = $num1 - $num2;
$product = $num1 * $num2;
$quotient = $num1 / $num2;
$modulus = $num1 % $num2;

echo "SUM:" . $sum . "<br>";
echo "DIFFERENCE:" . $difference . "<br>";
echo "PRODUCT:" . $product . "<br>";
echo "QUOTIENT:" . $quotient . "<br>";
echo "MODULUS:" . $modulus . "<br>";





?>