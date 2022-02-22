<h1>Exercice 9</h1>
<p>Créer une fonctionpersonnalisée permettant d’afficher des boutons radio avec un tableau de valeurs en paramètre("Monsieur","Madame","Mademoiselle").</p>
<h2>Résultat</h2>
<?php

$elements = ["Masculin" => "NON",
"Feminin" => "NON",
"autre" => "checked",
];

function genererRadio($elements){
    $fox = "";
    foreach ($elements as $key => $value) {
        if ($value == "checked") {
            $c= "checked";
        } else {
            $c = "";
        }
        $fox .= "<input type='radio' name='sexe' ".$c.">".$key."<br>";
    }
    return $fox;
}

echo genererRadio($elements);