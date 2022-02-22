<h1>Exercice 14</h1>
<p>Créer une classe Voiture possédant 2 propriétés(marque et modèle) ainsi qu’une classe VoitureElec qui hérite(extends) de la classe Voiture et qui a une propriété 
supplémentaire (autonomie).Instancier une voiture «classique» et une voiture «électrique»ayant les caractéristiques suivantes:</p>
<ul>
    <li>Peugeot 408: $v1 = new Voiture("Peugeot","408");</li>
    <li>BMW i3150: $ve1 = new VoitureElec("BMW","I3",100);</li>
</ul>
<p>Votre programme de test devra afficher les informations des 2 voitures de la façon suivante:<br> echo $v1->getInfos()."<\br/>";<br>echo $ve1->getInfos()."<\br/>";</p>
<h2>Résultat</h2>
<?php

use Voiture as GlobalVoiture;

$v1 = new Voiture("Peugeot", "408");
$v2 = new VoitureElectrique("BMW", "I3", 100);
echo $v1->getInfos();
echo "<br><br>";
echo $v2->getInfos();

Class Voiture
{
    protected string $_marque;
    protected string $_modele;

    public function __construct(string $marque, string $modele){
        $this->_marque = $marque;
        $this->_modele = $modele;
    }

    public function __toString(){
        return $this->_marque." ".$this->_modele;
    }

    public function getInfos(){
        return "Marque et modèle du véhicule : ".$this;
    }
}

Class VoitureElectrique extends Voiture 
{
    private int $_autonomie;

    public function __construct(string $marque, string $modele, int $autonomie){
        parent::__construct($marque, $modele);
        $this->_autonomie = $autonomie;
    }

    public function getInfos(){
        return parent::getInfos()."<br>L'autonomie de la voiture est de ".$this->_autonomie." %";
    }
}