<?php

// Create a function, average5, that takes five numbers as arguments. The function should return the average of the numbers.

require __DIR__ . "/vendor/autoload.php";

function average5($a, $b, $c, $d, $e) { // … your function here
    $result = $a + $b + $c + $d + $e;

    return $result / 5;
    
};

dump(average5(1, 2, 3, 4, 5)); // 3