<?php

class RGB
{
    private $color;

    function __construct($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
    }

    function getColor()
    {
        return $this->color;
    }

    function setColor($colorCode)
    {
        $this->color = ltrim($colorCode, '#');
        $this->parseColor();
    }

    private function parseColor()
    {
        echo "hhh";

        if ($this->color) {
            $colors = sscanf($this->color, '%02x%02x%02x');
            print_r($colors);
        }
    }
}

$myColor = new RGB("ffef27");
