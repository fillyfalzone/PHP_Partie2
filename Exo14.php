<h1>Exo 14 </h1>
<p>
Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec <br> 
qui hérite (extends) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br> 
Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques <br> 
suivantes :<br> 
Peugeot 408 : $v1 = new Voiture("Peugeot","408");<br> 
BMW i3 150 : $ve1 = new VoitureElec("BMW","I3",100);<br> 
Votre programme de test devra afficher les informations des 2 voitures de la façon suivante : <br> 

echo $v1->getInfos()."<br/>";
echo $ve1->getInfos()."<br/>";
</p>

<?php
//création de la class mère voiture
    Class Voiture{
        // private properties
        protected string $_marque;
        protected string $_modele;


        //public properties "ftc° __construct 
        public function __construct($marque, $modele){
            $this->_marque = $marque;
            $this->_modele = $modele;
        }

        // gettters  
        public function getMarque(){
            return $this->_marque;
        }
        public function getModele(){
            return $this->_modele;
        }

        //setters
        public function setMarque(string $marque): string{
            $this->_marque = $marque;
        }
        public function setModele(string $modele): string{
            $this->_modele = $modele;
        }
        public function getInfos(){
            echo "Ce véhicule est de marque: ". $this->_marque. 
                 "de modèle: ". $this->_modele;
        }
    }


    // Création de la class fille "extends" de mère 'confère ttes properties et méthodes

    Class VoitureElec extends Voiture{

        private $_autonomie;

        //fct° construct
        public function __construct($marque, $modele, $autonomie){
            //appel du construct de la class mere
            parent::__construct($marque, $modele);
            //relatif à la class fille
            $this->_autonomie = $autonomie;
        }
        //getters et setter de la class fille
        public function getAutonomie(){
            return $this->_autonomie;
        }
        public function setAutonomie($autonomie){
            $this->_autonomie = $autonomie;
        }
        // appel des getters du parent 
        public function getInfos(){
            echo "Ce  e-véhicule est de marque: ".parent::getMarque(). 
                 "de modèle: ". parent::getModele()." son autonomie est de "
                 .$this->_autonomie."km.";
        }
     
    }
    // instancation d'une voiture "commune"
    $v1 = new Voiture("Peugeot", "408");
    $ve1 = new VoitureElec("BMW", "I3",100);

    echo $v1->getInfos()."<br/>";
    echo $ve1->getInfos()."<br/>";

    

?>


