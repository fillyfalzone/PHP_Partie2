<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo6</h1>
    <p>
        Créer une fonction personnalisée permettant de remplir une liste déroulante à partir d'un tableau 
        de valeurs. <br>
        Exemple : <br>
        $elements = array("Monsieur","Madame","Mademoiselle");
        alimenterListeDeroulante($elements);
        <br><br>

    </p>

    <?php
        $elements = array("Monsieur", "Madame","Mademoiselle");
        //Creer la fonction perso 
        function alimenterListeDeroulante(array $elements){
            //parcour du tableau 
            foreach($elements as $etat){
                echo "<option value='$etat'>$etat</option>";
            }
        }

    ?>
    <!-- le corps de la liste deroulante-->
    <label for="etatCivil">Etat Civil</label><br>
    <select name="etatCivil" id="etatCivil">
        <?php alimenterListeDeroulante($elements); //appel de la function perso?>
    </select>
  

</body>
</html>

