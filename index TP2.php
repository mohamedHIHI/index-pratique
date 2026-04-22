<?php
class CompteBancaire
{ 
    var $nom = '';
    private $solde = 0;
    private $rib = '';
    public function deposer($montant)
    {
        $this->solde += $montant;
    }
    public function afficherCompte()
    {
        echo "<br> Compte Bancaire : ".$this->rib;
        echo "<br> Nom : ".$this->nom;
        echo "<br> Solde : ".$this->solde." Dhs";
        echo "<hr>";
    }
    public function retirer($montant)
    {
        $this->solde = $this->solde - $montant;
    }
}
$cp1 = new  CompteBancaire();
$cp1->deposer(8000);
$cp1->afficherCompte();

$cp1->nom = "Mohamed ELHairche";
$cp1->retirer(9000);
$cp1->afficherCompte();

$cp1 = new  CompteBancaire();
$cp1->afficherCompte();



