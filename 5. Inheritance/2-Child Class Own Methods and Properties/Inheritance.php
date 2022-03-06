<?php

require_once "University.php";
require_once "Teacher.php";

$university = new University("Boston Univeristy", "Europe", "ABC123", $university);
$teacher1 = new Teacher("John" , 45, "Maths", $university);
$teacher2 = new Teacher("Sina", 60, "Physics", $university);


$teacher1->printTeacherDetails(); 
$teacher1->printUniversityDetails();
echo "---------------------" . PHP_EOL;

$teacher2->printTeacherDetails();
$teacher2->printUniversityDetails();
echo "---------------------" . PHP_EOL;