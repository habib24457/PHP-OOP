<?php

class ParentClass
{
    protected $name;
    public function __construct($name)
    {
        $this->name = $name;
        $this->sayHi();
    }

    function sayHi()
    {
        echo "Hi\n";
    }
}


class ChildClass extends ParentClass
{
    function sayHi()
    {
        parent::sayHi(); //calling the method from parent class
        echo "Hello from Child";
    }
}

$c1 = new ChildClass("Habib");
