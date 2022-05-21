<?php
$students = ["Pappy", "John", "jane", "Doe"];
//Adding a value fash to the array
$students[] = "Fash";  // adds value to the end of an array
$students[2] = "Sarah"; //using manual insertion though not advisable since the size of the array might be unknown

//reasign the first value to the value called Jill
$students[2] = "Sarah"; 
//print array using implode
echo implode (" ", $students);



?>