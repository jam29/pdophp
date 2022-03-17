<?php

Class Adresse {
    private $no_rue;
    private $rue ;
    private $cp ;
    private $ville ;
    public function __construct($no,$r,$cp,$v) {
        $this->no_rue = $no ;
        $this->rue = $r ;
        $this->cp = $cp  ;
        $this->ville= $v ;
    }
    public function getAdresse(){
        echo $this->no_rue.",".$this->rue.",".$this->cp.",".$this->ville ;
    }
    
}

Class Personne {
    private $nom ;
    private $prenom ;
    private $adresse ;

    public function __construct($nom,$prenom,$no,$r,$cp,$v) {
        $this->nom = $nom ;
        $this->prenom = $prenom ;
        $this->adresse = new Adresse($no,$r,$cp,$v) ;
    }

    public function getAdresse() {
        echo $this->adresse->getAdresse();
    }

    public function getNomPrenom() {
        echo $this->nom.":".$this->prenom ;
    }
}

$p1 = new Personne("Pol","Jean",9,"rue des Lilas", "29200", "BREST") ;
$p1->getAdresse(); 

?>