<?php

/**
 * We can use constructor when we need to pass some arguements already while initiate an object of the class
 */

class Person
{
    public $name;

    function __construct($personName, $age = 0)
    {
        echo "A new Constructor is created";
        $this->name = $personName;
    }

    function sayName()
    {
        echo "This is my Name = {$this->name}";
    }
}

#we can also keep a parameter optional like age variable in person class by putting a default value in it

$p = new Person('Habib');


class Movie
{

    public $movieName;
    public $movieGenre;
    public $boxOffice;

    function __construct($name, $genre, $boxOffice)
    {
        $this->movieName = $name;
        $this->movieGenre = $genre;
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
