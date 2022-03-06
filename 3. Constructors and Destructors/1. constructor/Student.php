<?php

class Student{
    public $name = "Kaushik Debdas";
    public $class = "10th";

    // Constructor
    function __construct(){
        echo "Hello from Constructor" . PHP_EOL;
        $this->name = "";
        $this->class = "";
    }

    function printDetails(){
        echo "$this->name is studying in $this->class class" . PHP_EOL;
    }
}

// Creation of Instance of class
$student1 = new Student();  // This will invoke the constructor
$student1->printDetails();