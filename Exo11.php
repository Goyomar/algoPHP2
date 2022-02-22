<h1>Exercice 11</h1>
<p>Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) à partir d’une chaîne de caractère représentant une date.</p>
<h2>Résultat</h2>

<?php

echo formaterDateFR("2018-02-23");
echo "<br><br>";
echo versionDeux("2018-02-23");


function formaterDateFR(string $da){
    setlocale(LC_TIME, "fr_FR.utf8","fra");
    return utf8_encode(strftime("%A %e %B %Y", strtotime($da)));
}

function versionDeux($date){
    $coucou = new IntlDateFormatter("fr_FR", IntlDateFormatter::FULL, IntlDateFormatter::FULL);
    $boom = explode(" ",$coucou->format(strtotime($date)));
    return $boom[0]." ".$boom[1]." ".$boom[2]." ".$boom[3];
}
