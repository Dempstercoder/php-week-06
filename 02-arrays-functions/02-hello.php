<?php

require __DIR__ . "/vendor/autoload.php";

function hello($name) {
    return "hello {$name}"; // … your code here
};

dump(hello("alice")); // "hello alice"
dump(hello("bob")); // "hello bob"