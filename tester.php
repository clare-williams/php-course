<?php

$pizza = "pepperoni";


$pizza = array("pepperoni", "cheese", "mushroom", "supreme");

    sort($pizza);
    for ($x=0; $x <= count ($pizza); $x++) {
    echo $pizza [$x] . "<br />";
    
    
}


echo count ($pizza_toppings);




function fizzbuzz ($num) {
    for ($num; $num <= 100; $num ++) {
        if ($num % 3 == 0 && $num % 5 == 0) {
            echo "$num FIZZBUZZ! <br/>";
        } elseif ($num % 3 == 0) {
            echo "$num FIZZ! <br />";
        }elseif ($num % 5 == 0 ) {
            echo "$num BUZZ! <br />";
        } else {
            echo "$num <br/>";
        }
        
        }
    }
    
    
    fizzbuzz (46);


    


?>