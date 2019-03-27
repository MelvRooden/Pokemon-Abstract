<?php

//template for making a pokemon
abstract class Pokemon
{
    protected $name; //the name of the pokemon
    protected $type; //the Type of the pokemon
    protected $health; //the amount of health the pokemon has
    protected $hitPoints; //the amount of hitPoints the pokemon has
    protected $resistance = []; //the Strength of the pokemon
    protected $weakness = []; //the Weakness of the pokemon
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

    public function statDisplay()
    {
        echo $this->__get('name') . "<br>";
        echo "Type : " . $this->__get('type') . ". " . "<br>";
        echo "Health : " . $this->__get('health') . "/" . $this->__get('hitPoints') . "." . "<br>";
        echo "Resistance : " . $this->__get('resistance')->type . ". " . "<br>";
        echo "Weakness : " . $this->__get('weakness')->type . ". " . "<br>";
        echo "Attack 1 : " . $this->__get('attacks')[0]->name . " " . $this->__get('attacks')[0]->damage . " dmg. " . "<br>";
        echo "Attack 2 : " . $this->__get('attacks')[1]->name . " " . $this->__get('attacks')[1]->damage . " dmg. " . "<br>";
        echo "<br><br>";
    }

    public function battleCalc($attack, $defender) {

    }

    public function battleDisplay($attack, $defender)
    {
        echo "<br>";

        //displays an image of the pokemon
//        echo "<img width=30% src=" . $this->picture[0]->location . " alt=" . "A picture of" . $this->name . ">";

        echo "<br>";

        //displays fight two on screen
        echo $this->name . " attacks " . $defender->name . " with " . $attack . " and deals " . $result['damage'] . " damage.";
        echo "<br>";
        echo $defender->name . " has " . $result['hitPoints'] . " hitPoints of the " . $defender->health . " left.";
    }
}

class Pikachu extends Pokemon
{
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->type = 'lightning';
        $this->health = '60';
        $this->hitPoints = '60';
        $this->resistance = new Resistance('fighting', 20);
        $this->weakness = new Weakness('fire', 1.5);
        $this->attacks =
            [
                new Attack('Electric Ring', 50),
                new Attack('Pika Punch', 20)
            ];
        $this->picture =
            [
                new Picture('front', 'img/pikachu.gif'),
                new Picture('back', 'img/pikachu-back.gif')
            ];
    }
}

class Charmeleon extends Pokemon
{
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->type = 'fire';
        $this->health = '60';
        $this->hitPoints = '60';
        $this->resistance = new Resistance('lightning', 10);
        $this->weakness = new Weakness('water', 2);
        $this->attacks =
            [
                new Attack('Head Butt', 10),
                new Attack('Flare', 30)
            ];
        $this->picture =
            [
                new Picture('front', 'img/charmeleon.gif'),
                new Picture('back', 'img/charmeleon-back.gif')
            ];
    }
}

class Squirtle extends Pokemon
{
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->type = 'water';
        $this->health = '60';
        $this->hitPoints = '60';
        $this->resistance = new Resistance('fire', 15);
        $this->weakness = new Weakness('lightning', 1.25);
        $this->attacks =
            [
                new Attack('Water blast', 35),
                new Attack('Punch', 20)
            ];
        $this->picture =
            [
                new Picture('front', 'img/squirtle.gif'),
                new Picture('back', 'img/squirtle-back.gif')
            ];
    }
}

class Mankey extends Pokemon
{
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->type = 'fighting';
        $this->health = '60';
        $this->hitPoints = '60';
        $this->resistance = new Resistance('water', 10);
        $this->weakness = new Weakness('lightning', 50);
        $this->attacks =
            [
                new Attack('Water blast', 35),
                new Attack('Punch', 20)
            ];
        $this->picture =
            [
                new Picture('Sucker punch', 'img/mankey.gif'),
                new Picture('Uppercut', 'img/mankey-back.gif')
            ];
    }
}