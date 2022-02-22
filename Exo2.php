<h1>Exercice 2</h1>
<p>Soit le tableau suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");Réaliser un algorithme permettant d’afficher le 
tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) grâce à une fonction personnalisée.
Vous devrez appeler la fonction comme suit: afficherTableHTML($capitales);</p>
<h2>Résultat</h2>

<?php
$capitales = ["France" => "Paris",
            "Allemagne" => "Berlin",
            "USA" => "Washington",
            "Italie" => "Rome"
            ];

function afficherTableHTML($capitales){
    $table ="";
    $table .= "<table border=1>";
        $table .= "<thead>";
            $table .= "<tr>";
                $table .= "<th>Pays</th>";
                $table .= "<th>Capitales</th>";
            $table .= "<tr>";
        $table .= "<thead>";
        $table .= "<tbody>";
        foreach ($capitales as $pays => $capitale) {
            $table .= "<tr>";
                $table .= "<td>".$pays."</td>";
                $table .= "<td>".$capitale."</td>";
            $table .= "</tr>";
        }
        $table .= "</tbody>";
    $table .= "</table>";
    return $table;
}

echo afficherTableHTML($capitales);