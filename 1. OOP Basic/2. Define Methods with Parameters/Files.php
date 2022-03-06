<?php

class Files{

    function displayContent($filename) : bool{
        $result = true;

        try {
            //code...
            echo "Read the content of the file: $filename" . PHP_EOL;

            $content = file_get_contents($filename);
            echo "Displaying content of the file: $filename" . PHP_EOL;
            echo $content;
        } catch (Exception $e) {
            //throw $e;
            $result = false;
        }
        return $result;
    }
}

$files1 = new Files();
$files1->displayContent("Test.txt");