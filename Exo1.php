<h1>Exercice 1</h1>
<p>Créer une fonction personnalisée convertirMajRouge()permettant de transformer une chaîne de caractère passée en argument en majuscules et en rouge.Vous devrez appeler la 
fonction comme suit: convertirMajRouge($texte)</p>
<p>Affichage(si $texte = «Mon texte en paramètre»)</p>
<h2>Résultat</h2>
<?php

$texte = "Mon texte en parametre";

function convertirMajRouge(string $texte){
    $result = "<span style='color:red'>".strtoupper($texte)."</span>";
    return $result;
}

echo convertirMajRouge($texte);