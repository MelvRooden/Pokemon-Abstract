<?php

//template for making a resistance
class Resistance
{
    public $type; //the name of the resistance
    public $blockPoints; //the amount of blocked damage points


    public function __construct($_type, $_blockPoints)
    {
        $this->type = $_type;
        $this->blockPoints = $_blockPoints;
    }
}