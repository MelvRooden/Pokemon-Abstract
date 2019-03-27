<?php

//template for making a weakness
class Weakness
{
    public $type; //the name of the weakness
    public $multiplier; //the weakness multiplier


    public function __construct($_type, $_multiplier)
    {
        $this->type = $_type;
        $this->multiplier = $_multiplier;
    }
}