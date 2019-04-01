<?php

//template for making an attack
class Attack
{
    protected $name; //the name of the attack
    protected $damage; //the amount of damage points

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