<?php
/*
    1. Write File class
    2. Pass the fileName to constructor
    3. check if the fileexists in constructor
    4. if file found then open the file using fopen method
    5. write method getContent to get the content of the file
    6. write destructor method to close the file if file is already opened.
 */

class File{

    public $fileHandler;
    public $fileName;
    public $fileSize;
    public $content;
    public $fileFound;

    function __construct($fileName)
    {
        $this->fileHandler = null;
        $this->fileFound = false;
        
        // check if the file exists
        if(file_exists($fileName))
        {
            // Is this a file????
            if( is_file($fileName))
            {
                $this->fileFound = true;
            }
        }

        if($this->fileFound)
        {
            $this->fileHandler = fopen($fileName, "r");
            $this->fileSize = filesize($fileName);
        }
    }

    function getContent(){
        if($this->fileFound)
        {
            $content = fread($this->fileHandler, $this->fileSize);
            return $content;
        }
        else{
            return "No Files Found!!!!" ;
        }
    }

    function __destruct()
    {
        if($this->fileFound)
        {
            fclose($this->fileHandler);
            echo "\nFile is closed from the Destructor";
        }
    }
}

$file1 = new File("Test.txt");
echo $file1->getContent();