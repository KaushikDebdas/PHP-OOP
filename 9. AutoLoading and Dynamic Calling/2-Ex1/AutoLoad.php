<?php

spl_autoload_register(

    function($classname){
        echo "Loading class: $classname\n";
        require_once "$classname.php"; 
    }
);

$str = new src\StringHelper();
$str->hello();