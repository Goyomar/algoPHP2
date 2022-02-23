<h1>Exercice 13</h1>
<p>Créer  une  classe  Voiture  possédant  les  propriétés  suivantes: marque,  modèle,  nbPorteset vitesseActuelleainsi que les méthodes demarrer( ), accelerer( )et stopper( )
en plus des  accesseurs  (get)  et  mutateurs  (set)  traditionnels.  La  vitesse  initiale  de  chaque  véhicule instancié est de 0. Une méthode personnalisée pourra afficher 
toutes les informations d’un véhicule. v1 ➔"Peugeot","408",5v2 ➔"Citroën","C4",3Coderl’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux 
de tests  pour  vérifier  la  cohérence  de  la  classe Voiture. Vous  devez  afficher  les  tests  et  les éléments suivants:</p>

<?php

$v1 = new Voiture("Peugeot","408",5);
$v2 = new Voiture("Citroën","C4",3);

echo $v1->demarrer();
echo "<br>";
echo $v1->accelerer(50);
echo "<br>";

echo $v2->demarrer();
echo "<br>";
echo $v2->stopper();
echo "<br>";
echo $v2->accelerer(20);
echo "<br>";
echo $v1->getVitesseActuelle();
echo "<br>";
echo $v2->getVitesseActuelle();
echo "<br>";
echo $v1->ralentir(20);
echo "<br>";
echo $v1->getVitesseActuelle();
echo "<br>";
echo $v1->ralentir(80);
echo "<br>";
echo $v1->getVitesseActuelle();
echo "<br>";
echo $v2->ralentir(50);
echo "<br><br>Infos véhicule 1<br>************************<br>";
echo $v1->infoVoiture();
echo "<br><br>Infos véhicule 2<br>************************<br>";
echo $v2->infoVoiture();

Class Voiture
{
    private string $_marque;
    private string $_modele;
    private int $_nbPorte;
    private int $_vitesseActuelle;
    private bool $_stop;

    public function __construct(string $marque, string $modele, int $nbPorte){
        $this->_marque = $marque;
        $this->_modele = $modele;
        $this->_nbPorte = $nbPorte;
        $this->_vitesseActuelle = 0;
        $this->_stop = true;
    }

    public function __toString(){
        return $this->_marque." ".$this->_modele;
    }

    public function infoVoiture(){
        $pots = $this->_stop == true ? 'démarré' : 'arrété';
        return "Nom et modèle du véhicule : ".$this."<br>Nombre de portes : ".$this->_nbPorte."<br>Le véhicule Peugeot est ".$pots."<br>Sa vitesse actuelle est de : ".$this->_vitesseActuelle." km / h";
    }

    public function demarrer(){
        $this->_stop = false;
        return "Le véhicule ".$this." démarre";
    }

    public function stopper(){
        $this->_stop = true;
        return "Le véhicule ".$this." est stoppé";
    }

    public function accelerer(int $vitesse){
        if (!$this->_stop) {
            $this->setVitesseActuelle($this->_vitesseActuelle + $vitesse);
            $return = "Le véhicule ".$this." accélère de ".$vitesse." km / h";
        } else {
            $return = "Le véhicule ".$this." veut accélerer de ".$vitesse."<br>Pour accélerer, il faut démarrer le véhicule ".$this." !";
        }
        return $return;
    }

    public function ralentir(int $vitesse){
        if (!$this->_stop) {
            $this->setVitesseActuelle($this->_vitesseActuelle - $vitesse);
            $return = "Le véhicule ".$this." ralenti de ".$vitesse." km / h";
            if ($this->_vitesseActuelle < 0) {
                $this->_vitesseActuelle = 0;
            }
        } else {
            $return = "Pour ralentir, il faut démarrer le véhicule ".$this." !";
        }
        return $return;
    }

    public function getMarque(){
        return $this->_marque;
    }

    public function setMarque(string $newMarque){
        $this->_marque = $newMarque;
    }

    public function getModele(){
        return $this->_modele;
    }

    public function setModele(string $newModele){
        $this->_modele = $newModele;
    }

    public function getnbPorte(){
        return $this->_nbPorte;
    }

    public function setnbPorte(int $newNbPorte){
        $this->_nbPorte = $newNbPorte;
    }

    public function getVitesseActuelle(){
        return "La vitesse du véhicule ".$this." est de ".$this->_vitesseActuelle." km / h";
    }

    public function setVitesseActuelle(int $newVitesseActuelle){
        $this->_vitesseActuelle = $newVitesseActuelle;
    }
}