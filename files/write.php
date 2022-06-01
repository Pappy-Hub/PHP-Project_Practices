<?php

$filename = "./file.txt"; //file path
$handle = fopen($filename, "a"); //open the file in a read mode
fwrite($handle, "I am numner one God's child\n"); //write to file
fclose($handle); //close file