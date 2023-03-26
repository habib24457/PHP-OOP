<?php


/**Abstract class and method
 * If we want to declare a base class and we want this base class to be extended or inherited to other classes
 * we have to declare the base class as abstract class and the methods are as abstract method
 * So whenever the base class is extended, then all the abstract methods have to be declared in the next classes
 * The abstract methods in the base class does not have any body
 * 'Abstract' in OOP is a concept to write better code. 
 */

abstract class Shape
{
    abstract function getArea();
    abstract function getParemeter();

    function exampleFunction()
    {
        echo "Hello World";
    }
}

class Rectengle extends Shape
{
    private $base, $height;

    function __construct($base, $height)
    {
        $this->base = $base;
        $this->height = $height;
    }

    function setBase($base)
    {
        $this->base = $base;
    }

    function setHeight($height)
    {
        $this->height = $height;
    }

    function getArea()
    {
        return $this->base * $this->height;
    }

    function getParemeter()
    {
    }
}


class Triangle extends Shape
{
    function getArea()
    {
    }

    function getParemeter()
    {
    }
}

/**'Final' in abstract class or in normal class
 * We can use the 'Final' keyword before a method, we cant modify/override that method again
 * Final keyword can be used in normal class also.
 */

class myNewClass
{
    final function randomFunction()
    {
        echo "Saying hello from random function";
    }
}

class my2ndClass extends myNewClass
{

    /*This is not possible*/
    // function randomFunction(){
    //     echo "Overriding method from abstract class final method";
    // }
}

$myObj = new myNewClass();
$myObj->randomFunction();
