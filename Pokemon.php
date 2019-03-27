<?php

//template for making a pokemon
abstract class Pokemon
{
    protected $name; //the name of the pokemon
    protected $type; //the Type of the pokemon
    protected $health; //the amount of health the pokemon has
    protected $hitPoints; //the amount of hitPoints the pokemon has
    protected $resistance; //the Strength of the pokemon
    protected $weakness; //the Weakness of the pokemon
    protected $attacks = []; //the Attacks of the pokemon
    protected $picture = []; //the pictures or gifs of the pokemon

    public function __get($request)
    {
        return $this->$request;
    }

    //calculates the fight between 2 pokemon
    public function attack($attack, $defender)
    {
        //compares the pokemon and calculates the fight
        //compares the type of the attacker with the resistance of the defender and makes a calculation
        if ($this->type === $defender->weakness->name) {
            echo "The attack was very effective!";
            echo "<br>";
            $attack_damage = $attack->damage * $defender->weakness->multiplier;

            //compares the attacker type with the defender weakness and makes a calculation
        } else if ($this->type === $defender->resistance->name) {
            echo "The attack was very ineffective!";
            echo "<br>";
            $attack_damage = $attack->damage - $defender->resistance->blockPoints;

            //if none of the above are the comparable this calculation will be made
        } else {
            echo "The attack hit them.";
            echo "<br>";
            $attack_damage = $attack->damage;
        }

        //takes the amount of damage off the attacked pokemon's hitPoints
        $attack_result = $defender->hitPoints - $attack_damage;

        //puts all the results into $result
        $result = [$attack_damage, $attack_result];

        //saves the result in the pokemon
        $defender->hitPoints = $attack_result;

        //returns the $result to the index.php
        return $result;
    }

    public function statDisplayer()
    {
        echo $this->__get('name') . "'s stats.";
        echo "<br>";
        echo "Type " . $this->__get('type')->name . ". ";
        echo "Health " . $this->__get('health') . ". ";
        echo "Resistance " . $this->__get('resistance')->name . ". ";
        echo "Weakness " . $this->__get('weakness')->name . ". ";
        echo "Attack 1: " . $this->__get('attacks')[0]->name . " " . $this->__get('attacks')[0]->damage . ". ";
        echo "Attack 2: " . $this->__get('attacks')[1]->name . " " . $this->__get('attacks')[1]->damage . ". ";
    }

//    public function fightDisplayer()
//    {
//        echo "<br>";
//
//        //displays an image of the pokemon
//        echo "<img width=30% src=" . $poke1->picture[0]->location . " alt=" . "A photo the" . $poke0->name . ">";
//
//        echo "<br>";
//
//        //starts the attack function and sends the needed information to the function
//        $result1 = $poke1->attack($poke1->attacks[1], $poke1, $poke0);
//
//        //displays fight two on screen
//        echo $poke1->name . " attacks " . $poke0->name . " with " . $poke1->attacks[1]->name . " and deals " . $result1[0] . " damage.";
//        echo "<br>";
//        echo $poke0->name . " has " . $result1[1] . " hitpoints of the " . $poke1->health . " left.";
//    }
}

class Pikachu extends Pokemon
{
    public function __construct($_name, $_type, $_health, $_hitPoints, $_resistance, $_weakness, $_attacks, $_picture)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->health = $_health;
        $this->hitPoints = $_hitPoints;
        $this->resistance = $_resistance;
        $this->weakness = $_weakness;
        $this->attacks = $_attacks;
        $this->picture = $_picture;
    }
}

class Charmeleon extends Pokemon
{
    public function __construct($_name, $_type, $_health, $_hitPoints, $_resistance, $_weakness, $_attacks, $_picture)
    {
        $this->name = $_name;
        $this->type = $_type;
        $this->health = $_health;
        $this->hitPoints = $_hitPoints;
        $this->resistance = $_resistance;
        $this->weakness = $_weakness;
        $this->attacks = $_attacks;
        $this->picture = $_picture;
    }
}