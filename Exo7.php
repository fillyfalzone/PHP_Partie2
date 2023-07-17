<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo7</h1>
    <p>
            Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra préciser 
        dans le tableau associatif si la case est cochée ou non. <br>
        Exemple : <br>
        genererCheckbox($elements); <br>
        //où $elements est un tableau associatif clé => valeur avec 3 entrées.
    </p>

    

    <?php
        $elements = array(
            "choix 1" => 0,
            "choix 2" => 1,
            "choix 3" => 0
        );
        //Creer ftc° perso
        function genererCheckbox(array $elements){
            //parcourir le tableau
            foreach($elements as $choix => $state){
                //controler si la case est cocher ou non
                if($state){
                    echo "<br><input type='checkbox' name='choix' id='$choix' checked>";
                }else{
                    echo "<br><input type='checkbox' name='choix' id='$choix'>";
                }
                echo "<label for='$choix'>$choix</label>";
            
            }
        }
    ?>
    <!-- Formulaire de base -->
        <form action="#">
            <?php genererCheckbox($elements); // appel de la fonction?>
        </form>
</body>
</html>