<?php

/* Create a class BasketItem in the App\Shopping namespace. It should take a type and price in the constructor. It should have type(), price(), and priceFormatted() methods. Put the following in index.php and then check that you get back the right results:

Hint: PHP has a number_format function*/

namespace App\Shopping;

class BasketItem
{
    private $type;
    private $price;


    public function __construct($type, $price)
    {
        $this->type = $type;
        $this->price = $price;
    }

    // only need dollar sign for setting the variables

    public function type()
    {
        return $this->type; // don't need a dollar sign for accesing type. 
    }

    public function price()
    {
        return $this->price;
    } // this is number price is not being converted into a format so do not need number_format. It is just 3.50

    public function priceFormatted()
    {
        return "£" . number_format($this->price, 2);
    }// "£" . = turns it into a string, adds £ at front, and concatenates (joins) £ to the number. 
    // number_format(converts this inside brackets to a number format, by accessing $item through $this). 2 gives the two last two digits after a decimal - £3.50.
}