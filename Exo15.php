<h1>Exercice 15</h1>
<p>En  utilisant  les  ressources  de  la  page http://php.net/manual/fr/book.filter.php,  vérifier  si  une adresse e-mail a le bon format.</p>
<h2>Résultat</h2>

<?php

echo emailValidation("elan@elan-formation.fr");
echo "<br><br>";
echo emailValidation("contact@elan");

function emailValidation(string $email){
    $ok = filter_var($email,FILTER_VALIDATE_EMAIL);
    if ($ok !== false) {
        $return = "l'adresse ".$ok." est une adresse e-mail valide";
    } else {
        $return = "l'adresse ".$email." est une adresse e-mail invalide";
    }
    return $return;
}