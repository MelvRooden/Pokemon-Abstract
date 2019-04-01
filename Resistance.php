<?php

//template for making a resistance
class Resistance
{
    protected $type; //the name of the resistance
    protected $blockPoints; //the amount of blocked damage points

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