<?php

    /*
     * Write PHP Program to Define Three Car Types and its Color.
     * Display Car Type and its Color.
     */

class Cars
{
    // PROPERTIES
    public $name;
    public $color;

    // METHOD
    function setName(){
        echo "Hello from CAR class" . PHP_EOL ;
    }


}

// Create Object
$car1 = new Cars();
// Access Properties
$car1->name = "Ferari";
$car1->color = "RED";
// Call Method
$car1->setName();

echo "$car1->name is $car1->color" . PHP_EOL;

// Create Object
$car2 = new Cars();
// Access Properties
$car2->name = "BMW";
$car2->color = "BLUE";
// Call Method
$car2->setName();

echo "$car2->name is $car2->color" . PHP_EOL;