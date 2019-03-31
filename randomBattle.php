<?php


function randomBattle($pokeBag)
{
    $randAttacker = mt_rand(0, sizeof($pokeBag) - 1);
    do {
        $randDefender = mt_rand(0, sizeof($pokeBag) - 1);
    } while ($randAttacker === $randDefender);

    $pokeBag[$randAttacker]->pokemonDisplay(1);

    echo "<div class='d-inline-block' style='width:38%;'>";
    $safety = 0;
    do {
        $safety++;
        $randAttack0 = mt_rand(0, sizeof($pokeBag[$randAttacker]->__get('attacks')) - 1);
        $randAttack1 = mt_rand(0, sizeof($pokeBag[$randDefender]->__get('attacks')) - 1);

        $pokeBag[$randAttacker]->attack($randAttack0, $pokeBag[$randDefender]);

        if ($pokeBag[$randAttacker]->__get('hitPoints') >= 1 && $pokeBag[$randDefender]->__get('hitPoints') >= 1) {
            $pokeBag[$randDefender]->attack($randAttack1, $pokeBag[$randAttacker]);
        }
    } while ($pokeBag[$randAttacker]->__get('hitPoints') >= 1 && $pokeBag[$randDefender]->__get('hitPoints') >= 1 && $safety <= 20);
    echo "</div>";

    $pokeBag[$randDefender]->pokemonDisplay(0);
}