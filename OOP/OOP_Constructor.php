<?php

/**
 * We can use constructor when we need to pass some arguements already while initiate an object of the class
 */

class Person
{
    public $name;

    function __construct($personName)
    {
        echo "A new Constructor is created";
        $this->name = $personName;
    }

    function sayName()
    {
        echo "This is my Name = {$this->name}";
    }
}

class Movie
{

    public $movieName;
    public $movieGenre;
    public $boxOffice;

    function __construct($movieName, $movieGenre, $boxOffice)
    {
        $this->movieName = $movieName;
        $this->movieGenre = $movieGenre;
        $this->boxOffice = $boxOffice;
    }

    function showMovie()
    {
        echo "Movie Name: {$this->movieName} \n";
        echo "Genre: {$this->movieGenre} \n";
        echo "Boc Office: {$this->boxOffice} \n";
    }

    function addTwoNumbers($firstNumber, $secondNumber)
    {
        $sum = $firstNumber + $secondNumber;
        echo "Sum of two numbers = {$sum} \n";
    }
}

$movieObj = new Movie('Avatar', 'Adventure', 2);
$movieObj->showMovie();
$movieObj->addTwoNumbers(2, 3);
