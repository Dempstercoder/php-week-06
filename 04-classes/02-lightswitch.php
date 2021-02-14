<?php
// Create a class that represents a light switch

require __DIR__ . "/vendor/autoload.php";

class LightSwitch // ... your class here
{

    private $on = false; // default set to false. Because of line 32 we know it needs to be set to false first.


    public function isOn()
    {
        return $this->on;
    }

    public function turnOn()
    {
        $this->on = true;
    }

    public function turnOff()
    {
        $this->on = false;
    }

}


$lightSwitch = new LightSwitch(); // no values, so do not use construct, but still need to assign property.

// you can check whether it is on or not
dump($lightSwitch->isOn()); // false

// you can turn it on
$lightSwitch->turnOn();
dump($lightSwitch->isOn()); // true

// you can turn it off
$lightSwitch->turnOff();
dump($lightSwitch->isOn()); // false


/*isOn, turnOff and turnOff methods below, so we know we need
methods */