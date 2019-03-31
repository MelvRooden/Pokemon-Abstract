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

    public function statDisplay()
    {
        echo "<br>";
        echo $this->name . "<br>";
        echo "Type : " . $this->type . ". " . "<br>";
        echo "Health : " . $this->health . "." . "<br>";
        echo "Resistance : " . $this->__get('resistance')->type . ". " . "<br>";
        echo "Weakness : " . $this->__get('weakness')->type . ". " . "<br>";
        echo "Attack 1 : " . $this->__get('attacks')[0]->name . " " . $this->__get('attacks')[0]->damage . " dmg. " . "<br>";
        echo "Attack 2 : " . $this->__get('attacks')[1]->name . " " . $this->__get('attacks')[1]->damage . " dmg. " . "<br>";
        echo "<br><br>";
    }

    //compares the pokemon and calculates the fight
    public function attack($attackNumber, $defender)
    {
        //compares the type of the attacker with the resistance of the defender and makes a calculation
        if ($this->type === $defender->weakness->type) {
            $effect = "The attack was very effective!";
            echo "<br>";
            $attackDamage = $this->attacks[$attackNumber]->damage * $defender->weakness->multiplier;

            //compares the attacker type with the defender weakness and makes a calculation
        } else if ($this->type === $defender->resistance->type) {
            $effect = "The attack was very ineffective!";
            echo "<br>";
            $attackDamage = $this->attacks[$attackNumber]->damage - $defender->resistance->blockPoints;

            //if none of the above are the comparable this calculation will be made
        } else {
            $effect = "The attack hit them.";
            echo "<br>";
            $attackDamage = $this->attacks[$attackNumber]->damage;
        }

        //takes the amount of damage off the attacked pokemon's hitPoints and saves it
        $defender->hitPoints = $defender->hitPoints - $attackDamage;

        $this->battleDisplay($attackDamage, $attackNumber, $defender, $effect);
    }

    public function battleDisplay($attackDamage, $attackNumber, $defender, $effect)
    {
        //displays fight two on screen
        echo $effect;
        echo "<br>";
        echo $this->name . " attacks " . $defender->name . " with " . $this->attacks[$attackNumber]->name . " and deals " . $attackDamage . " damage.";
        echo "<br>";
        echo $defender->name . " has " . $defender->hitPoints . " hitPoints of the " . $defender->health . " left.";
        echo "<br>";
    }

    public function pokemonDisplay($pictureSide)
    {
        //displays an image of the pokemon
        echo "<div class='d-inline-block float-top' style='width:30%;'>";
        if ($pictureSide === 1) {
            echo "<img class='mt-5' style='width:95%;' src=" . $this->picture[$pictureSide]->location . " alt=" . "A picture of " . $this->name . "'s '" . $this->picture[$pictureSide]->name . " side" . ">";
        } else {
            echo "<img class='mt-18' style='width:50%;' src=" . $this->picture[$pictureSide]->location . " alt=" . "A picture of " . $this->name . "'s '" . $this->picture[$pictureSide]->name . " side" . ">";
        }
        echo "<br>";
        $this->statDisplay();
        echo "</div>";
    }
}

class Pikachu extends Pokemon
{
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->type = 'lightning';
        $this->health = '60';
        $this->hitPoints = $this->health;
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
        $this->hitPoints = $this->health;
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
        $this->hitPoints = $this->health;
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
        $this->hitPoints = $this->health;
        $this->resistance = new Resistance('water', 10);
        $this->weakness = new Weakness('lightning', 1.1);
        $this->attacks =
            [
                new Attack('Sucker punch', 35),
                new Attack('Uppercut', 20)
            ];
        $this->picture =
            [
                new Picture('front', 'img/mankey.gif'),
                new Picture('back', 'img/mankey-back.gif')
            ];
    }
}

class Diglett extends Pokemon
{
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->type = 'ground';
        $this->health = '60';
        $this->hitPoints = $this->health;
        $this->resistance = new Resistance('water', 15);
        $this->weakness = new Weakness('water', 1.8);
        $this->attacks =
            [
                new Attack('Anal dig', 55),
                new Attack('Ground move', 35)
            ];
        $this->picture =
            [
                new Picture('front', 'img/diglett.gif'),
                new Picture('back', 'img/diglett-back.gif')
            ];
    }
}

class Snorlax extends Pokemon
{
    public function __construct($_name)
    {
        $this->name = $_name;
        $this->type = 'normal';
        $this->health = '120';
        $this->hitPoints = $this->health;
        $this->resistance = new Resistance('ground', 20);
        $this->weakness = new Weakness('fighting', 2.5);
        $this->attacks =
            [
                new Attack('Ground stomp', 15),
                new Attack('Eat', 25)
            ];
        $this->picture =
            [
                new Picture('front', 'img/snorlax.gif'),
                new Picture('back', 'img/snorlax-back.gif')
            ];
    }
}