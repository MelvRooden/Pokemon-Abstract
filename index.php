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

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="css/style.css" type="text/css" rel="stylesheet">

</head>
<body>

<?php
//making new energy types
//$types = [
//        new Type("Lightning"),
//        new Type("Fire"),
//        new Type("Water"),
//        new Type("Fighting")
//];


$pokeBag = [

//making a new pokemon
$poke0 = new Pikachu(
    'Willbert'
),

$poke1 = new Charmeleon(
    'Frankie'
),

$poke2 = new Charmeleon(
    'WaterMan'
),

$poke3 = new Charmeleon(
    'MonkeyMan'
)

];

echo "<br>";

echo "<div class=\"col-md-offset-7\">";
    echo "<div class=\"col-md-offset-0\">";
        $poke0->statDisplay();
        $poke1->statDisplay();
        $poke2->statDisplay();
        $poke3->statDisplay();
    echo "</div>";
echo "</div>";

echo "<div class=\"col-md-offset-7\">";
    echo "<div class=\"col-md-offset-0\">";

        $challenger0 = mt_rand(0, sizeof($this->pokeBag));
    $challenger1 = mt_rand(0, sizeof($this->pokeBag));
    if ($challenger0 === $challenger1) {
            $challenger1 = mt_rand(0, sizeof($this->pokeBag));
        }
//        echo $pokeBag[$challenger0][$this->__get('name')];
        var_dump($challenger0);
        var_dump($challenger1);

    echo "</div>";
echo "</div>";

?>
</body>
</html>