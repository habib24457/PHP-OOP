<?php

/***
 * Class
 */

class Human
{
    public $name;

    function sayHi()
    {
        echo "Hello World \n";

        $this->sayName();
    }

    function sayName()
    {
        //$this->sayHi();
        echo "My Name is {$this->name}"; //to access the variable from the inside of class we have to use 'this'
    }
}

class Cat
{
    function sayHi()
    {
        echo "Mawoo";
    }
}

class Dog
{
    function sayHi()
    {
        echo "Woof";
    }
}



$h1 = new Human(); //$h1,c1,d1 is an object
$h1->name = "Habib"; // set operation of public variable
echo $h1->sayHi();
//another object of human
echo "\n";
$h2 = new Human();
$h2->name = "Rahman";
echo $h2->sayHi();


//$c1 = new Cat();
//$d1 = new Dog();

//$h1->sayHi();
//echo "\n";
//echo $h1->name; // get operation of public variable
//echo "\n";
//$c1->sayHi();
