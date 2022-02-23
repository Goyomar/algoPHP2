<h1>Exercice 7</h1>
<p>Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser dans le tableau associatif si la case est cochée ou non.</p>
<h2>Résultat</h2>

<?php

$elements = ["France" => "checked",
"Allemagne" => "",
"USA" => "checked",
];

function genererCheckbox($elements){
    $fox = "";
    foreach ($elements as $key => $value) {
        $fox .= "<input type='checkbox' name='visit' ".$value.">".$key."<br>";
    }
    return $fox;
}

echo genererCheckbox($elements);