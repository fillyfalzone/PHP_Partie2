<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<?php
        require 'Exo5.php';
        require 'Exo6.php';
        require 'Exo7.php';
        require 'Exo9.php';  
        // addaptation des variables à l'exo 10
        $nomsInput = array("Nom","Prénom","Ville", "Adresse E-mail"); 
        $formation = array("Developpeur logiciel","Designer web","Intégrateur","Chef de projet");

?>

<body>
    <h1>Exo 10</h1> 
    <p>
         En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer un formulaire <br>
        complet qui contient les informations suivantes : champs de texte avec nom, prénom, <br> adresse email, ville, sexe et une liste de choix parmi lesquels on pourra sélectionner un intitulé de formation : 
        « Développeur Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ». <br>
        Le formulaire devra également comporter un bouton permettant de le soumettre à un traitement 
        de validation (submit)
    </p>  
    
        <form action="#">
            <?php 
            addForm($nomsInput);
            echo "<br>";
            echo "<label for='radioBox'>Votre sexe :</label> <br>";
            afficherRadio($sexe);
            echo "<br>";
            echo '<label for="etatCivil">Choisissez une formation : </label><br>';
            echo '<select name="etatCivil" id="etatCivil">';
            alimenterListeDeroulante($formation); 
            echo ' </select>';
            ?>
            <br>
            <br>
            <input type="submit">
            <br>
             <br>
        </form>

</body>
</html>