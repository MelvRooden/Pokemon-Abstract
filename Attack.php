<?php

//template for making an attack
class Attack
{
    public $name; //the name of the attack
    public $damage; //the amount of damage points


    public function __construct($_name, $_damage)
    {
        $this->name = $_name;
        $this->damage = $_damage;
    }
}