<?php
/*
    1. Define a Student class
    2. Define properties of class
        -name
        -class
    3. Define get & set methods to set & access the properties via the methods
    4. Define printDetails to print both the properties
 */

class Student{
    public $name;
    public $class;

    // get & set methods for name
    function getName() : string{
        return $this->name;
    }
    
    function setName($name){
        $this->name = $name;
    }

    // get & set methods for class
    function getClass() : string{
        return $this->class;
    }
    
    function setClass($class){
        $this->class = $class;
    }

    function printDetails(){
        echo "$this->name is studying in $this->class class" . PHP_EOL;
    }
}

$student1 = new Student();
$student2 = new Student();

$student1->setName("Kaushik Debdas");
$student1->setClass("11th");

$student2->setName("Rafsan Hq");
$student2->setClass("5th");

$student1->printDetails();
$student2->printDetails();