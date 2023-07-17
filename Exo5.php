<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E</title>
</head>
<body>
<h1>Exo5</h1>
<p>
Créer une fonction personnalisée permettant de créer un formulaire de champs de texte en 
précisant le nom des champs associés.
Exemple :
$nomsInput = array("Nom","Prénom","Ville");
afficherInput($nomsInput);
</p>


<?php
        $nomsInput = array("Nom","Prénom","Ville"); 

        function addForm($nomsInput){ //créer de la fonction

            foreach($nomsInput as $identity){  //parcourir le tableau 
                //affichage du formulaire avec les données du tableau
                echo "<form action='#'>  
                        <label for='$identity'>$identity :</label><br> 
                        <input type='text' id='$identity'>
                      </form>";
            }

        }
?>

<?php 
    addForm($nomsInput); // appel de la fonction 
?>
    
</body>
</html>