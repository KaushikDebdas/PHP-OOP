<?php

class Car{
    public $name = "";
    public $age = 10; // Global variables

    // How to Acess Properties via Methods

    // Greater Methods
    function getName() : string{
        return $this->name;
    }
    // Setter Methods must be need a inside Parameter
    function setName($name){
        $age = 10; // Local variables
        $this->age = $age;
        $this->name = $name;
    }
}

$car1 = new Car();
// Example 1 - Getter & Setter Mehods
$car1->setName("Ferari");
echo $car1->getName() . PHP_EOL;

// Example 2 - Getter & Setter Mehods
$car1->setName("BMW");
echo $car1->getName() . PHP_EOL;

// Example 3 - Independent Objects
$car2 = new Car();
$car1->name = "HUNDAI";
echo $car1->getName() . PHP_EOL; 
echo $car2->getName() . PHP_EOL;