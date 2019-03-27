<?php

class Picture
{
    public $name; //name of the picture
    public $location; //the location of the picture


    public function __construct($_name, $_location)
    {
        $this->name = $_name;
        $this->location = $_location;
    }
}