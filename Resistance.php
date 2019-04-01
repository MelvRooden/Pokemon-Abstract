<?php

//template for making a resistance
class Resistance
{
    private $type; //the name of the resistance
    private $blockPoints; //the amount of blocked damage points

    public function __get($request)
    {
        return $this->$request;
    }

    public function __construct($_type, $_blockPoints)
    {
        $this->type = $_type;
        $this->blockPoints = $_blockPoints;
    }
}