<h1>Exercice 6</h1>
<p>Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau de valeurs.</p>
<h2>Résultat</h2>

<?php
$elements = ["Monsieur", "Madame", "Mademoiselle"];

function alimenterListeDeroulante($elements){
    $select = "";
    $select .= "<select>";
    foreach ($elements as $value) {
        $select .= "<option value='".$value."'>".$value."</option>";
    }
    $select .= "<select>";
    return $select;
}

echo alimenterListeDeroulante($elements);