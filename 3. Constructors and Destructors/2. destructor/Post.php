<?php

class Post{

    // CONSTRUCTOR
    // initialize the value
    function __construct()
    {
        echo "Hello from CONSTRUCTOR" . PHP_EOL;
    }
    // Destructor
    // close the connection or empty the space
    function __destruct()
    {
        echo "Hello from DESTRUCTOR" . PHP_EOL;
    }
}

$post = new Post();