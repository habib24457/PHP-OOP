<?php

/**Interfaces are just for writing better codes
 * we can define the structure of a class by using Interface
 * Then whenever the class implements the interface, it has to define the methods from interface
 * Inside interface the methods or functions does not have any body
 * One interface can extend another interface (inherit)
 * The interfaces can't be extend from a class
 */

interface BaseAnimal
{
    function isAlive();
    function canEat($foodType, $foodAmount);
    function breed();
}

class Animal implements BaseAnimal
{
    function isAlive()
    {
        echo "This animal is alive";
    }

    function canEat($foodType, $foodAmount)
    {
    }

    function breed()
    {
    }
}

interface WildAnimal extends BaseAnimal
{
    function color($color);
}

class Animal2 implements WildAnimal
{
    function isAlive()
    {
        echo "This animal is alive";
    }

    function canEat($foodType, $foodAmount)
    {
    }

    function breed()
    {
    }

    function color($color)
    {
    }
}

/**Polymorphism
 * When one object can take more than one interface, in OOP it is called polymorphism
 * 'Animal2' class implements the interface WildAnimal
 * WildAnimal interface extends another interface called BaseAnimal
 * Therefore Animal2 has multiple interfaces, this type of behavior is called polymorphism
 */
