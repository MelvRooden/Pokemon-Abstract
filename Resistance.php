<?php

//template for making a resistance
class Resistance
{
    public $name; //the name of the resistance
    public $blockPoints; //the amount of blocked damage points


    public function __construct($_name, $_blockPoints)
    {
        $this->name = $_name;
        $this->blockPoints = $_blockPoints;
    }
}