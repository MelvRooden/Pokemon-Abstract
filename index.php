<?php
include 'Pokemon.php';
include 'Type.php';
include 'Resistance.php';
include 'Weakness.php';
include 'Attack.php';
include 'Picture.php';
include 'randomBattle.php';
?>

<html>
<head>
    <meta charset="utf-8">
    <title>PokeBattle</title>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" type="text/css" rel="stylesheet">

</head>
<body>

<?php

$pokeBag = [
    //making a new pokemon
    $poke0 = new Pikachu(
        'Willbert'
    ),
    $poke1 = new Charmeleon(
        'Frankie'
    ),
    $poke2 = new Squirtle(
        'WaterMan'
    ),
    $poke3 = new Mankey(
        'MonkeyMan'
    )
];

echo "<div class='col-md-offset-7'>";
    echo "<div class='col-md-offset-0 float-top'>";

        randomBattle($pokeBag);

    echo "</div>";
echo "</div>";

?>
</body>
</html>