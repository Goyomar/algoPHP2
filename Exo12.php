<h1>Exercice 12</h1>
<p>La fonction var_dump($variable)permet d’afficher les informations d’une variable.Soit le tableausuivant : $tableauValeurs=array(true,"texte",10,25.369,
array("valeur1","valeur2"));A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.</p>
<h2>Résultat</h2>

<?php
$tableauValeurs = [true, "texte", 10, 25.369,["valeur1", "valeur2", ["coucou",21]]];

echo typeAndInner($tableauValeurs);

function typeAndInner($tableauValeurs){
    $result ="";
    for ($i=0; $i < count($tableauValeurs); $i++) { 
        $type = gettype($tableauValeurs[$i]);
        switch ($type) {
            case 'boolean':
                $result .= isBoolean($tableauValeurs[$i])."<br>";
                break;
            case 'string':
                $result .= isString($tableauValeurs[$i])."<br>";
                break;
            case 'integer':
                $result .= isNumber($tableauValeurs[$i])."<br>";
                break;
            case 'double':
                $result .= isNumber($tableauValeurs[$i])."<br>";
                break;
            case 'array':
                $result .= isArray($tableauValeurs[$i])."<br>";
                break;

            default:
                $result = "UNKNOWN TYPE";
                break;
        }
    }
    return $result;
}

function isString(string $string){
    return "string(".strlen($string).") \"".$string."\"";
}

function isNumber($number){
    $return = gettype($number) == 'integer' ? "int (".$number.")" : "float (".$number.")";
    return $return;
}

function isBoolean($bool){
    $return ="bool (";
    $return .= $bool == true ? "true)": "false)";
    return $return;
}

function isArray($array){
    $result = "array (".count($array).") { ";
    foreach ($array as $key => $value) {
        $result .= "[".$key."]=> ";
        $type = gettype($value);
        switch ($type) {
            case 'boolean':
                $result .= isBoolean($value);
                break;
            case 'string':
                $result .= isString($value);
                break;
            case 'integer':
                $result .= isNumber($value);
                break;
            case 'double':
                $result .= isNumber($value);
                break;
            case 'array':
                $result .= "<br>".isArray($value);
                break;
            default:
                $result = "UNKNOWN TYPE";
                break;
        }
        $result .= " }";    
    }
    return $result;
}