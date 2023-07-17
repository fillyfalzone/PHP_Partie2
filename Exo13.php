<h1>Exo 13</h1>
<p>
Créer une classe Voiture possédant les propriétés suivantes : marque, modèle, nbPortes et <br>
vitesseActuelle ainsi que les méthodes demarrer( ), accelerer( ) et stopper( ) en plus <br>
des accesseurs (get) et mutateurs (set) traditionnels. La vitesse initiale de chaque véhicule <br>
instancié est de 0. Une méthode personnalisée pourra afficher toutes les informations d’un 
véhicule. <br>
v1 ➔ "Peugeot","408",5 <br>
v2 ➔ "Citroën","C4",3 <br>
Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en réalisant des jeux de <br>
tests pour vérifier la cohérence de la classe Voiture. Vous devez afficher les tests et les éléments 
suivants : 
</p>

<?php
    Class Voiture{
        private $_marque;
        private $_modele;
        private $_nbPortes;
        private $_vitesseActuelle = 0;
        private $_state = false;
        
        
        
        // Fct° constructeur
        public function __construct(string $marque, string $modele, int $nbPortes,int $vitesseActuelle,){
            $this->_marque = $marque;
            $this->_modele = $modele;
            $this->_nbPortes = $nbPortes;
            $this->_vitesseActuelle = $vitesseActuelle;
            $this->_state = false;
        }

        // Les accesseurs
        public function getMarque(){
            return $this->_marque;
        }
        public function getModele(){
            return $this->_modele;
        }
        public function getNbPortes(){
            return $this->_nbPortes;
        }
        public function getVitesseActuelle(){
            echo "<br> La vitesse actuelle est ".$this->_vitesseActuelle."km/h.<br>";
            return $this->_vitesseActuelle;
        }
        public function getState(){
               if($this->_state == false){
              return" est éteinte.";
            }else{
               return " est démarrée.";
            }
        }
        //Les Mutateurs
        public function setMarque($marque){
            $this->_marque = $marque;
        }
        public function setModele($modele){
            $this->_modele = $modele;
        }
        public function setNbPortes($nbPortes){
            $this->_nbPortes = $nbPortes;
        }
        public function setVitesseActuelle($vitesseActuelle){
            $this->_vitesseActuelle = $vitesseActuelle;
        }
        public function setState(bool $state){
            $this->_state = $state;
        }

        // Les méthodes
        // ftc° permettant de demarrer la voiture
        public function demarrerVoiture (){
            //controle d
            if($this->_state == false){
                echo "La ".$this->_marque." ".$this->_modele." démarre.";
                return $this->_state = true;
            } else{
                echo "<br>La voiture est déjà démarrée .<br>";
            }
        }
        public function stopperVoiture (){
            if($this->_state == false){
                echo "<br> La voiture est déjà à l'arrêt . <br>";
            } else{
                echo "La voiture est arrêtée.";
                return $this->_state = false;
            }
        }



        //fonction accélérer 
        public function accelerer($vitesse){
            $this->_vitesseActuelle += $vitesse;

            if($this->_state == true) {
                echo "La voiture accélère de ".$vitesse." km/h";
                return $this->_vitesseActuelle;
               
            }else {
                
                    echo "<br> <span style='color:red;'> Demarrer le véhicule ! </span> <br>";
                
            } 
            
        }
    
        // function ralentire (soustrait la vitesse actuelle et renvoie la différence)
        public function ralentir($vitesse){
            if($this->_state == true){
                switch($vitesse){
                    //Les different car 
                    case ($vitesse > $this->_vitesseActuelle):
                        echo "<span style='color:red;'>Vous avez ralenti plus que prévu, allez-y doucement avec les freins, la voiture est à l'arrêt.</span> <br>";
                        return $this->_vitesseActuelle = 0;
                        break;
                    case ($vitesse == $this->_vitesseActuelle):
                        echo "<span style='color:blue;'>La voiture va s'arrêter !</span> <br>";
                        return $this->_vitesseActuelle = 0;
                        break;
                    case ($vitesse < $this->_vitesseActuelle):
                        $ralentir = $this->_vitesseActuelle-$vitesse;
                        echo "<span style='color:green;'>La voiture a ralenti de '.$vitesse.' km/h, votre vitesse actuelle est de '.$ralentir.' km/h.</span>";
                        return $this->_vitesseActuelle = $ralentir;   
                }
            }
            else {
                echo "Demarrer le véhicule !";
            }           
        }


        //fct° qui me donnera toutes les infos de la voiture
        public function getInfos(){

            echo "<br>- Nom: ".$this->_marque.
            "<br>- Modèle: ".$this->_modele.
            "<br>- Nombre de porte:".$this->_nbPortes.
            "<br>- Le véhicule ".$this->_marque." 
            ".$this->getState()."<br> La vitesse actuelle est: "
            .$this->_vitesseActuelle." km/h<br>";
        }
    }


    // place à la construction 

   $v1 = new Voiture("Peugeot","408",5,0);
   $v1->getInfos();
   echo "<br>";
   $v1->demarrerVoiture();
   echo "<br>";
   $v1->getInfos();

   echo "<br><br>";

   $v2 = new Voiture("Citroën","C4",3,0);
   $v2->getInfos();

   echo "<br>";
   $v2->demarrerVoiture();
   echo "<br>";
   $v2->accelerer(50);
   echo "<br>";
   $v2->getVitesseActuelle();
   echo "<br>";
   $v2->ralentir(30);
   echo "<br>";
   $v2->getVitesseActuelle();



