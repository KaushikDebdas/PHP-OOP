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

    function getSalaryAmount($totalDays): int{
        // $this is a special variable which can be used to access class properties
        $this->workingDays = $totalDays - $this->totalLeaveTake;

        $salary = $this->workingDays * $this->workingHoursPerday * $this->hourlyRate;

        return $salary; 
    }
}

$emp1 = new Employee();
$emp1->id = 101;
$emp1->name = "John Smith";
$emp1->totalLeaveTake = 4;
$salary = $emp1->getSalaryAmount(20);
echo "$emp1->name has worked for $emp1->workingDays Days and taken $emp1->totalLeaveTake leaves" . PHP_EOL;
echo "$emp1->name salary is $salary" . PHP_EOL;

$emp2 = new Employee();
$emp2->id = 102;
$emp2->name = "Kaushik Debdas";
$emp2->totalLeaveTake = 2;
$salary = $emp2->getSalaryAmount(20);
echo "$emp2->name has worked for $emp2->workingDays Days and taken $emp2->totalLeaveTake leaves" . PHP_EOL;
echo "$emp2->name salary is $salary" . PHP_EOL;