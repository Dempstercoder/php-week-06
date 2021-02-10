<?php
/* Create a class Potato in the App\Stuff\Things namespace. It should have a water() and hasGrown() method. hasGrown() should return false until the Potato has been watered five or more times. Put the following (code copied) in index.php and then check that you get back the right results:*/

namespace App\Stuff\Things;



class Potato // has to be capital letter. 
{

    private $water = 0; //set $water to default 0.


    public function hasGrown()
    {
        return $this->water >= 5; 
        //$this refers $potato, which accesses water method that has numbers going into it. 
        
        //is water more than or equal to 5, if so return boolean of true or false.
    }

    public function water()
    {
        $this->water += 1;
        // The water method increments.
    }
}