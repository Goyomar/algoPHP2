<h1>Exercice 10</h1>
<p>En utilisant l’ensemble des fonctions personnalisées crées précédemment,  créer  un  formulaire complet  qui  contient  les  informations  suivantes:  champs  de  texteavec  
nom,  prénom,  adresse  e-mail, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation: «Développeur Logiciel»,«Designer web», 
«Intégrateur» ou «Chef de projet».Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement de validation (submit).</p>
<h2>Résultat</h2>

<?php
$nomsInput = ["Nom", "Prénom", "Email", "Ville"];
$deroulante = ["Développeur Logiciel", "Designer Web", "Intégrateur", "Chef de projet"];
$elements = ["Masculin" => "",
"Feminin" => "",
"autre" => "checked"
];

echo afficherFormulaire($nomsInput,$deroulante, $elements);

function afficherFormulaire($nomsInput,$elements,$radio){
    $result = "<form>";
    $result .= afficherInput($nomsInput);
    $result .= genererRadio($radio);
    $result .= alimenterListeDeroulante($elements);
    $result .= "<button type='submit'>Envoyer</button>";
    $result .= "</form>";
    return $result;
}

function afficherInput($nomsInput){
    $form = "";
    foreach ($nomsInput as $value) {
        $epyt = $value == 'Email' ? 'email' : 'text';
        $form .= "<label for='".$value."'>".$value."</label><br>";
        $form .= "<input name='".$value."' type='".$epyt."' required><br>";
    }
    return $form;
}

function alimenterListeDeroulante($elements){
    $select = "";
    $select .= "<select>";
    foreach ($elements as $value) {
        $select .= "<option value='".$value."'>".$value."</option>";
    }
    $select .= "<select>";
    return $select;
}

function genererRadio($elements){
    $fox = "";
    foreach ($elements as $key => $value) {
        $fox .= "<input type='radio' name='sexe' ".$value.">".$key."<br>";
    }
    return $fox;
}