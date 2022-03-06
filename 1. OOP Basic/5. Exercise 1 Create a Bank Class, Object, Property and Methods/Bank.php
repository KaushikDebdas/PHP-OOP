<?php

class Bank{
    public $accnum;
    public $name;
    public $balance = 0;
    
    function depositAmount($amt){
        $this->balance = $this->balance + $amt;
    }

    function deductAmount($amt){
        if( $this->balance <= 0){
            echo "No Balance in the Account" . PHP_EOL;
            return;
        }
        if( $this->balance <= $amt){
            echo "Requested Amount is greate than Balance" . PHP_EOL;
            return;
        }
        
        $this->balance = $this->balance - $amt;
        
    }

    function checkBalance(){
        echo "Your Account Balance is: $this->balance" . PHP_EOL;
    }
}

$bank1 = new Bank();
$bank1->accnum = 101;
$bank1->name = "Kaushik Debdas";
$bank1->balance = 500;

$bank1->checkBalance();
$bank1->depositAmount(500);
$bank1->checkBalance();
$bank1->deductAmount(100);
$bank1->checkBalance();
$bank1->deductAmount(2000);
$bank1->checkBalance();
