<?php

$filename = "./file.txt"; //file path
$file = fopen($filename, "r"); //open the file in a read mode
$content = fread($file, filesize($filename)); //read file
echo $content; //prints data of the file
fclose($file); //close file
