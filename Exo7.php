<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>
<h2>Résultat</h2>

<?php

$elements = ["France" => "checked",
"Allemagne" => "NON",
"USA" => "checked",
];

function genererCheckbox($elements){
    $fox = "";
    foreach ($elements as $key => $value) {
        if ($value == "checked") {
            $c= "checked";
        } else {
            $c = "";
        }
        $fox .= "<input type='checkbox' name='".$key."' ".$c.">".$key."<br>";
    }
    return $fox;
}

echo genererCheckbox($elements);