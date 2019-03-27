<?php

//template for making a weakness
class Weakness
{
    public $name; //the name of the weakness
    public $multiplier; //the weakness multiplier


    public function __construct($_name, $_multiplier)
    {
        $this->name = $_name;
        $this->multiplier = $_multiplier;
    }
}