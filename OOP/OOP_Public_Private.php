<?php

class Fund
{
    private $fund; //private property can only be accessed by the methods inside the class

    function __construct($initialFund = 0)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money)
    {
        $this->fund += $money;
    }

    public function deductFund($money)
    {
        $this->fund -= $money;
    }

    public function getTotal()
    {
        echo "Total fund is {$this->fund}\n";
    }
}


$ourFund = new Fund(100);
$ourFund->addFund(10);
$ourFund->getTotal();

//$ourFund->fund = 1500; #here we can't access fund variable because it is private
