<?php

// Autoload function
spl_autoload_register(function ($classname)
{
    echo "Loading the class: $classname" . PHP_EOL;
    require_once("$classname.php");
});

$file1 = new File();
$file1->hello();

$db = new Database();
$db->hello();