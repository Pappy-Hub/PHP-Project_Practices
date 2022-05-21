<?php

$students = [1, 2, 3, 4, "tic", "tac", "toe", "Pappy","Long"];
$name = array_pop ($students); //pops | deletes the last element in the array
echo $name;

echo implode(" ", $students); //prints result of the popped array

echo "\n";
//add an element to the end of the array using push
array_push ($students, "Dera");
echo implode(" ", $students);

?>