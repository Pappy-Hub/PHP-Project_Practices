<?php 
/*
//example of a GLOBAL variable
$name = "Pappy"; //code failed because variable is defined GLOBALLY | outside the function andtherefor cannot be used when called within the function
function text1(){
    global $name; // GLOBAL variable can be called using GLOBAL keyword
    echo $name;
}

text1();

//example of a LOCAL variable
function text2(){
    $name = "John"; // variable within the function
    echo $name;
}
text2(); */

//example of STATIC variable
function sstat(){
    static $age = 1; //when static keyword is removed | outputs 111
    echo $age;
    $age++;
}
sstat(); //the variable can be called over and over...
sstat();
sstat(); //outputs 123




?>