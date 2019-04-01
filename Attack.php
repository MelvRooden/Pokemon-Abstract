<?php

//template for making an attack
class Attack
{
    private $name; //the name of the attack
    private $damage; //the amount of damage points

    public function __get($request)
    {
        return $this->$request;
    }

    public function __construct($_name, $_damage)
    {
        $this->name = $_name;
        $this->damage = $_damage;
    }
}