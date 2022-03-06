<?php

class Files{

    function displayContent($filename){

        // if file does not exists
        if(!file_exists($filename)){
            echo "filename does not exists" . PHP_EOL;
            return;
        }

        echo file_get_contents($filename) . PHP_EOL;

    }

    function getContent($filename) : string {
        // if file does not exists
        if(!file_exists($filename))
        {
            echo "filename does not exists" . PHP_EOL;
            return "";
        }
        $content = file_get_contents($filename);
        return $content;
    }
}

$file1 = new Files();
$file1->displayContent("Test.txt");
echo "Here is your file content:" . $file1->getContent("Test.txt");