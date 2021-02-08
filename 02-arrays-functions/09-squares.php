<?php

// Try it using foreach
//Try it using collect() (you'll need the illuminate/support package)

// Create a function, squares, that takes an array of numbers as an argument. Return a new array containing the square of each number.

require __DIR__ . "/vendor/autoload.php";


function squares($values) { // … your function here

    $newArray = []; // new array
                                    
    foreach ($values as $numbers) { // as is a keyword, $squares is name of the array. $numbers can be called anything, it's a variable.
        $newArray[] = $numbers * $numbers;
    }

    return $newArray;
}


dump(
    squares([2, 3, 4]), // [4, 9, 16]
    squares([2, 3, 4, 5, 6]), // [4, 9, 16, 25, 36]
);