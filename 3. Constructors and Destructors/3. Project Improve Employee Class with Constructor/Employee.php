<?php
/*
    calculate the employee salary
*/
class Employee{
    public $id;
    public $name;
    public $workingHoursPerday = 8;
    public $hourlyRate = 15;
    public $totalLeaveTake;
    public $workingDays;

    function __construct($id, $name, $totalLeaveTake)
    {
        $this->id = $id;
        $this->name = $name;
        $this->totalLeaveTake = $totalLeaveTake;
        
    }

    function getSalaryAmount($totalDays): int{
        // $this is a special variable which can be used to access class properties
        $this->workingDays = $totalDays - $this->totalLeaveTake;

        $salary = $this->workingDays * $this->workingHoursPerday * $this->hourlyRate;

        return $salary; 
    }
}

// Employee 1
$emp1 = new Employee(101, "John Smith", 4);
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worked for $emp1->workingDays Days and taken $emp1->totalLeaveTake leaves" . PHP_EOL;
echo "$emp1->name salary is $salary" . PHP_EOL;

// Employee 2
$emp2 = new Employee(102, "Kaushik Debdas", 2);
$salary = $emp2->getSalaryAmount(20);
echo "$emp2->name has worked for $emp2->workingDays Days and taken $emp2->totalLeaveTake leaves" . PHP_EOL;
echo "$emp2->name salary is $salary" . PHP_EOL;