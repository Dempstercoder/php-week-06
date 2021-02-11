<?php

// Create a class Ingredient in the App\Cooking namespace. It should take a name and an array of dietary information in the constructor. It should have a name() method which returns the name of the ingredient and a vegan() method which returns whether the ingredient contains "animal produce" in its dietary information. Put the following in index.php and then check that you get back the right results:


    namespace App\Cooking;

    class Ingredient
    {
    
        private $name;
        private $dietInfo;

        public function __construct($name, $dietInfo)
        {
            
            $this->name = $name;
            $this->dietInfo = $dietInfo;
            
        }

        public function name()
        {
            return $this->name;
        }


        public function vegan()
        {
          return array_search('animal produce', $this->dietInfo) === false;
        } 
    // to look at the array argument you must do array_search function.

    // look at php website example
    //array_search('thing you want to look at', $name of array/property name);

    //whenever doing anything with properties we always use $this. 

    //=== is this false? Then it is Vegan.
    }