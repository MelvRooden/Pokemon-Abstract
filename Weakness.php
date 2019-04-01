<?php

//template for making a weakness
class Weakness
{
    protected $type; //the name of the weakness
    protected $multiplier; //the weakness multiplier

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