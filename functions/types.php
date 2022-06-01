<?php

//loosly type
// function addNumbers( $num1, $num2, $num3) {
//     echo $num1 + $num2 + $num3;
// }    

// addNumbers(12, 33, "23 Pappy");



//strict type function
declare (strict_types=1);
function addNumbers(int $num1, int $num2, int $num3){
    echo $num1 + $num2 + $num3;
}

$sum = addNumbers(12, 23, 99);