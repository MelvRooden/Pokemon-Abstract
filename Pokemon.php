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
        echo "<div class='p-2 panel-transparent panel-heading'>";
        echo $this->name . "<br>";
        echo "Type : " . $this->type . ". " . "<br>";
        echo "Health : " . $this->health . "." . "<br>";
        echo "Resistance : " . $this->resistance->type . ". " . "<br>";
        echo "Weakness : " . $this->weakness->type . ". " . "<br>";
        echo "Attack 1 : " . $this->attacks[0]->name . " " . $this->__get('attacks')[0]->damage . " dmg. " . "<br>";
        echo "Attack 2 : " . $this->attacks[1]->name . " " . $this->__get('attacks')[1]->damage . " dmg. " . "<br>";
        echo "</div>";
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
        echo $defender->name . " has ";
        if ($defender->hitPoints <= 0 ) {
            echo 0;
        } else {
            echo $defender->hitPoints;
        }
        echo " hitPoints of the " . $defender->health . " left.";
        echo "<br>";
    }

    public function pokemonDisplay($pictureSide)
    {
        //displays an image of the pokemon
        echo "<div class='d-inline-block float-bottom' style='width:30%;'>";
        if ($pictureSide === 1) {
            echo "<img class='float-top' style='width:95%; margin-top:100px' src=" . $this->picture[$pictureSide]->location . " alt=" . "A picture of " . $this->name . "'s '" . $this->picture[$pictureSide]->name . " side" . ">";
        } else {
            echo "<img class='float-top' style='width:50%; margin-top:500px' src=" . $this->picture[$pictureSide]->location . " alt=" . "A picture of " . $this->name . "'s '" . $this->picture[$pictureSide]->name . " side" . ">";
        }
        echo "<br>";
        $this->statDisplay();
        echo "</div>";
    }
}