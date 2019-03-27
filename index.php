<?php
include 'Pokemon.php';
include 'Type.php';
include 'Resistance.php';
include 'Weakness.php';
include 'Attack.php';
include 'Picture.php';
?>

<html>
<head>
    <meta charset="utf-8">
    <title>PokeBattle</title>

<!--    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">-->
<!--    <link href="css/style.css" type="text/css" rel="stylesheet">-->

</head>
<body>

<?php
//making new energy types
$types = [
        new Type("Lightning"),
        new Type("Fire"),
        new Type("Water"),
        new Type("Fighting")
];

//making a new pokemon
$poke0 = new Pikachu(
    'Willbert',
    $types[0],
    60,
    60,
    new Resistance($types[3], 20),
    new Weakness($types[1], 1.5),
    [
        new Attack('Electric Ring', 50),
        new Attack('Pika Punch', 20)
    ],
    [
        new Picture('front', 'img/pikachu.gif'),
        new Picture('back', 'img/pikachu-back.gif')
    ]
);

//making a new pokemon
$poke1 = new Charmeleon(
    'Frankie',
    $types[1],
    60,
    60,
    new Resistance($types[0], 10),
    new Weakness($types[2], 2),
    [
        new Attack('Head Butt', 10),
        new Attack('Flare', 30)
    ],
    [
        new Picture('front', 'img/charmeleon.gif'),
        new Picture('back', 'img/charmeleon-back.gif')
    ]
);

var_dump($poke1);

//displays the stats of the pokemon on screen



echo "<br>";

echo "<div class=\"col-md-offset-7\">";
    echo "<div class=\"col-md-offset-0\">";

$poke0->statDisplayer();

    echo "</div>";
echo "</div>";

//echo "<br>";
//echo "<br>";

//echo "<div class=\"col-md-offset-1\">";
//    echo "<div class=\"col-md-offset-0\">";
//
//        echo $poke0->name . "'s stats"; echo "<br>";;
//        echo "Type" . $poke0->type->types->type . ". ";
//        echo "Health " . $poke0->health . ". ";
//        echo "Resistance " . $poke0->resistance->name->type . ". ";
//        echo "Weakness " . $poke0->weakness->name->type . ". ";
//        echo "Attack 1: " . $poke0->attacks[0]->name . " " . $poke0->attacks[0]->damage . ". ";
//        echo "Attack 2: " . $poke0->attacks[1]->name . " " . $poke0->attacks[1]->damage;
//
//        echo "<br>";
//
//        //displays an image of the pokemon
//        echo "<img width=30% src=" . $poke0->picture[1]->location . " alt=" . "A photo the" . $poke0->name . ">";
//
//        echo "<br>";
//
//        //starts the attack function and sends the needed information to the function
//        $result0 = $poke0->attack($poke0->attacks[0], $poke0, $poke1);
//
//        //displays what happens in the pokemon fight on screen
//        //displays fight one on screen
//        echo $poke0->name . " attacks " . $poke1->name . " with " . $poke0->attacks[0]->name . " and deals " . $result0[0] . " damage. ";
//        echo "<br>";
//        echo $poke1->name . " has " . $result0[1] . " hitpoints of the " . $poke1->health . " left.";
//        echo "<br>";
//
//    echo "</div>";
//echo "</div>";

?>
</body>
</html>