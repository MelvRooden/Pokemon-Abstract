<?php

//template for making a weakness
class Weakness
{
    private $type; //the name of the weakness
    private $multiplier; //the weakness multiplier

    public function __get($request)
    {
        return $this->$request;
    }

    public function __construct($_type, $_multiplier)
    {
        $this->type = $_type;
        $this->multiplier = $_multiplier;
    }
}