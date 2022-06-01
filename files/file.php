<?php

// //READ FROM FILE using fread() "r"
// $filename = "./file.txt"; //file path
// $handle = fopen($filename, "r"); //open the file in a read mode
// $contents = fread($handle, filesize($filename)); //read file

// echo $contents; //prints data of the file
// fclose($handle); //close file


//WRITE TO FILE  using 'fwite() "w"
// $filename = "./file.txt"; //file path
// $handle = fopen($filename, "w"); //open the file in a read mode

// fwrite($handle, "Pappy is the man"); //Write to file

// fclose($handle); //close file


//APPEND TO FILE "a"
$filename = "./file.txt"; //file path
$handle = fopen($filename, "a"); //open the file in a read mode

fwrite($handle, "Pappy is the man, shit pays \n"); //Write to file

fclose($handle); //close file


// Open file in a read mode fopen()
// Read file content fread()
// Write to file fwrite()
// Close a file fclose()

?>


