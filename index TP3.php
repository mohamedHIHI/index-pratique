<?php

class B {
    protected $nom;
    public function __construct($nom) 
    {
        $this->nom = $nom;
    }
    public function affichernom() 
    {
        echo "<hr> Le nom est : " . $this->nom . "<br>";
    }
}

class A extends B {
 protected $prenom;
  protected $age;
    public function __construct($nouvelnom,$pre,$age) 
    {
    parent::__construct($nouvelnom);

        $this->prenom =$pre;
         $this->age =$age;
    }
    public function affichernom() {
        parent::affichernom();
        echo "<hr> Le per est : " . $this->prenom . "<br>";
        echo "<hr> Le age est : " . $this->age . "<br>";
    }
}

$b = new A("Aymen","ELyaakoubi",19);
$b->affichernom();

?>