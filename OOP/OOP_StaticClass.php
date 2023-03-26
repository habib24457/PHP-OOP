<?php

/**Static method
 * When a method won't be change and has to be used multiple times
 * If we create object each time calling the method, it will be taking too many space in memory
 * Then we call call it as static method and we can access the method without creating an object
 */

class MathCalculator
{
    function fibonacci($n)
    {
    }

    static function factorial($n)
    {
        echo "The factorial number is=  " . $n;
    }
}

$mathObj = new MathCalculator(); //We can avoid creating objects

MathCalculator::factorial(2);
