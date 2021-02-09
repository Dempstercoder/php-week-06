<?php
// Create a class that represents a phone

// Hint: You can use dd() instead of dump() to stop the PHP at a specific point. This can be useful if later lines are causing errors.

require __DIR__ . "/vendor/autoload.php";

class Phone  // ... your class here
{
    private $model;
    private $make;


    public function __construct($mk, $md) 
    {
        $this->model = $md;
        $this->make = $mk;
    }

    public function model() 
    {
        return $this->model;
    }

    public function make() 
    {
        return $this->make; //calling the makes: $retro, $galaxy etc
    }

}

// create three phones
$iPhone = new Phone("Apple", "iPhone XS"); // need to take these two values 
$galaxy = new Phone("Samsung", "Galaxy");
$retro = new Phone("Nokia", "3210");

// use methods to find out model/make
dump($iPhone->model()); // "iPhone XS"
dump($retro->make()); // "Nokia"
dump($galaxy->make()); // "Samsung"
dump($iPhone->make()); // "Apple"