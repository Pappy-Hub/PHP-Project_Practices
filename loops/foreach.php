<?php
$people = [
    $person1 = ["first_name" => "Andrew",
    "last_name" => "Zuri",
    "age" => "25",
    "hobbies" => "programming"],

    $person2 = ["first_name" => "Sara",
    "last_name" => "Sophie",
    "age" => "24",
    "hobbies" => "singing"],
    
    $person3 = ["first_name" => "Dre",
    "last_name" => "Sandy",
    "age" => "45",
    "hobbies" => "reading"],
    
    $person3 = ["first_name" => "Pappy",
    "last_name" => "Fash",
    "age" => "99",
    "hobbies" => "Programming"],

];

foreach ($people as $person) {
    if($person["first_name"] == "Pappy"){
        echo "Hi {$person["first_name"]}, you are {$person["age"]} years And AWESOMEEEEEE!";
    }
 

    echo "\n";
}   

foreach ($people as $person) {
    if($person["first_name"] == "Pappy" || $person["first_name"] == "Sara"){
        echo "Hi {$person["first_name"]}, you are {$person["age"]} years And AWESOME";
    }
    
    echo "\n";
    
}    