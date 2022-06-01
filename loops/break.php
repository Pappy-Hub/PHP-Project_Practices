<?php
//do while loop
$i = 1;
do{
    if ($i == 5)
    break;
      echo "DO WHILE LOOP NUMBER: $i \n";

    $i++;
}
while($i < 10);



for($i = 10; $i > 0; $i--){
    if($i == 5){
        continue;
    }
    echo "FOR LOOP NUMBER: $i \n";
}