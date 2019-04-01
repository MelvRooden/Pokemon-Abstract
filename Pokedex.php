<?php

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