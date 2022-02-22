<h1>Exercice 1</h1>
<p>Soit l’URL suivante: http://my.mobirise.com/data/userpic/764.jpg Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.</p>
<h2>Résultat</h2>

<?php

function repeterImage($url, $nb){
    $result ="";
    for ($i=0; $i < $nb; $i++) { 
        $result .= "<img src='".$url."' alt='bug'>";
    }
    return $result;
}

echo repeterImage("http://my.mobirise.com/data/userpic/764.jpg", 50);