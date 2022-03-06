<?php
/*
    1. write a Bank class
    2. define balance as Properties & hide it so that is can't be accessed via object
    3. define Public Mehotds
        - getBalance
        - depositAmount
        - deductAmount
    4. set initial Balance via the Construct
*/

class Bank
{

    private $balance;

    public function getBalance()
    {
        # code...
        return $this->balance;
    }

    function __construct($balance)
    {
        // initial amount when account is created
        $this->balance = $balance;
    }

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
}

$bank1 = new Bank(100);
echo $bank1->getBalance() . PHP_EOL;
$bank1->depositAmount(500);
echo $bank1->getBalance() . PHP_EOL;
$bank1->deductAmount(500);
echo $bank1->getBalance() . PHP_EOL;