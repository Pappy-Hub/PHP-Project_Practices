<?php
/*


/*PHP page that is able to perform basic calculations: 
addition, subtraction, division, multiplication, and modulus.
the calculator should accept 2 parameters and produce 
results based on the specific operator.*/

        //Method A
        function add($a, $b)
        {
            return $sum = $a + $b;
        }
        echo add(10, 2);


        function sub($a, $b)
        {
            return $sub = $a - $b;
        }
        echo sub(11, 2);


        function div($a, $b)
        {
            return $div = $a / $b;
        }
        echo div(13, 2);


        function percent($a, $b)
        {
            return $percent = $a % $b;
        }
        echo percent(99, 2);

        
        function modulus($a, $b)
        {
            return $modulus = $a % $b;
            return $percent = $a % $b;
        }
        echo modulus(912, 2); 
        


/*      
        //Method B
        $min = 10;
        $max = 99;
        echo $answer = $min, $max;

        $answer = ($min + $max);
        $answer = ($min * $max);
        $answer = ($min / $max);
        $answer = ($min % $max);
        $answer = ($min ** $max);

        echo $answer; */


        //Method C
        $min = 10;
        $max = 99;
        
        echo "MIN: $min " . "MAX: $max <br>";
        echo  "Addition: " . ($min + $max) . "<br>";
        echo  "Subtraction: " . ($min - $max) . "<br>";
        echo  "Multiplication: " . ($min * $max) . "<br>";
        echo  "Division: " . ($min / $max) . "<br>";
        echo  "Modulus: " . ($min % $max) . "<br>";
       


    ?>