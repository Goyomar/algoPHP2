<h1>Exercice 4</h1>
<p>A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML qui contiendra le lien hypertexte de la page Wikipédia de la capitale (le lien hypertexte 
devra s’ouvrir dans un nouvel onglet et le tableau sera trié par ordre alphabétique de la capitale).On admet que l’URL de la page Wikipédia de la capitale adopte la 
forme:https://fr.wikipedia.org/wiki/Le tableau passé en argument sera le suivant:$capitales= array ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington",
"Italie"=>"Rome","Espagne"=>"Madrid");</p>
<h2>Résultat</h2>

<?php
$capitales = ["France" => "Paris",
"Allemagne" => "Berlin",
"USA" => "Washington",
"Italie" => "Rome",
"Espagne" => "Madrid"
];

function afficherTableHTML($capitales){
    asort($capitales);
    $table ="";
    $table .= "<table border=1>";
        $table .= "<thead>";
            $table .= "<tr>";
                $table .= "<th>Pays</th>";
                $table .= "<th>Capitales</th>";
                $table .= "<th>Lien wiki</th>";
            $table .= "<tr>";
        $table .= "<thead>";
        $table .= "<tbody>";
            foreach ($capitales as $pays => $capitale) {
            $table .= "<tr>";
                $table .= "<td>".$pays."</td>";
                $table .= "<td>".$capitale."</td>";
                $table .= "<td><a href='https://fr.wikipedia.org/wiki/".$capitale."' target='_blank'>".$capitale."</a></td>";
            $table .= "</tr>";
            }
        $table .= "</tbody>";
    $table .= "</table>";
    return $table;
}

echo afficherTableHTML($capitales);
