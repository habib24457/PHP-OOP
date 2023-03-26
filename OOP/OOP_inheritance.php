<?php

class Animal
{
    protected $name; //This can be used inside this class and by the classes that extends it

    public function __construct($myName)
    {
        $this->name = $myName;
    }

    public function eat()
    {
        echo "\n {$this->name} is eating";
    }

    public function run()
    {
        echo "I am running";
    }

    public function sleep()
    {
        echo "I need some sleep\n";
    }

    /**Method override
     * we can declare an empty method
     * Then we can inherit it in different class and use it differently in different class
     */
    public function dream()
    {
    }
}


class Human extends Animal
{
    function talk()
    {
        echo "I can talk";
    }

    public function dream()
    {
        $num1 = 2;
        $num2 = 5;
        echo $sum = $num1 + $num2;
    }
}

class Cat extends Animal
{
    public function dream()
    {
        echo "\nMeaning less dream";
    }
}



$humanObj = new Human('Habib');
$humanObj->sleep();
$humanObj->dream();
$humanObj->eat();

$cat1 = new Cat('White cat');
$cat1->dream();
