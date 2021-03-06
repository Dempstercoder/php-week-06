<?php
// Create a function hasNumber, that returns true if the given string contains a digit.

require __DIR__ . "/vendor/autoload.php";

function hasNumber($str) {
    return preg_match("/[0-9]/", $str) === 1; // … your code here
}

dump(hasNumber("blah")); // false
dump(hasNumber("bl3h")); // true
dump(hasNumber("bl3h5")); // true