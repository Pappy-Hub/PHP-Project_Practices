<?php

$person = [
    "first_name" => "Pappy",
    "last_name" => "Fash",
    "age" => "99",
    "hobbies" => "Hacking",

    "second_name" => "John",
    "last_name" => "Doe",
    "age" => "109",
    "hobbies" => "Anonymous"
];

?>

<h2>
    Hi, my name is <?php echo $person["second_name"]; ?>, I am <?php echo $person["age"] ?> years old and I love
    <?php echo $person["hobbies"]; ?>
</h2>