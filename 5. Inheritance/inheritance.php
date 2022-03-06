<?php

class University{

    public $universityName = "Bosoton University";

    function helloUniversity(){
        echo "Hello from $this->universityName" . PHP_EOL;

    }
}

class Teacher extends University{

    public $teacherName = "Kaushik";

    function helloTeacher(){
        echo "Hello from $this->teacherName" . PHP_EOL;
    }
}

$teacher1 = new Teacher();
$teacher1->helloTeacher();
$teacher1->helloUniversity(); // Using Child object to call the parent method
echo "$teacher1->teacherName" . PHP_EOL;
echo "$teacher1->universityName" . PHP_EOL;