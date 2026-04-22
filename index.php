<?php
class Etudiant
{ 
    public $prenom = "hamza";
    public $nom = "HAYAT";
    public $age = 20;
    public function __construct($nom, $prenom)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->age = 19;
    }
    public function afficher()
    {
        echo "<br> Nom : ".$this->nom;
        echo "<br> Prenom : ".$this->prenom;
        echo "<br> Age : ".$this->age;
        echo "<hr>";
    }
}
$etd = new Etudiant("Aymen", "ELyaakoubi");
$etd->afficher();
$etd->age = 19;

$etd = new Etudiant("Mohamed", "ELHairche");
$etd->afficher();
$etd->age = 20;

$etd = new Etudiant("Mohamed", "hihi");
$etd->afficher();
$etd->age = 19;



