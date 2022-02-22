<h1>Exercice 5</h1>
<p>Créer  une  fonction  personnalisée  permettant  de créer  un  formulaire  de  champs  de  texte  en précisant le nom des champs associés.</p>
<h2>Résultat</h2>

<?php
$nomsInput = ["Nom", "Prénom", "Ville"];

function afficherInput($nomsInput){
    $form = "";
    $form .= "<form>";
    foreach ($nomsInput as $value) {
        $form .= "<label>".$value."</label><br>";
        $form .= "<input type='text' required><br>";
    }
    $form .= "</form>";
    return $form;
}

echo afficherInput($nomsInput);