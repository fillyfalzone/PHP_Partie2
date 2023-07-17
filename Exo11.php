<h1>Exo 11</h1>
<p>
    Ecrire une fonction personnalisée qui affiche une date en français (en toutes lettres) <br> à partir d’une 
    chaîne de caractère représentant une date. <br>
    Exemple : <br>
    formaterDateFr("2018-02-23");
</p>

<?php
    $date = "2018-02-23";
  
    


    function formaterDateFr($date){
        $jour = array("Lundi","Mardi","Mercredi","Jeudi","Vendredi","Samedi","Dimanche");    
    $mois = array(
        "Janvier",
        "Fevrier",
        "Mars",
        "Avril",
        "Mai",
        "Juin",
        "Juillet",
        "Aout",
        "Septembre",
        "Octobre",
        "Novembre",
        "Decembre"
    );
        $dateFr = date('N/d/m/Y',strtotime($date));
        $N = intval(date('N',strtotime($date)));
        $m = intval(date('m',strtotime($date)));
        $d = intval(date('d',strtotime($date)));
        $Y = intval(date('Y',strtotime($date)));
        
        echo $jour[$N-1]." ".$d." ".$mois[$m-1]." ". $Y;
    }
  
    formaterDateFr("2040-06-19"); 
?>
