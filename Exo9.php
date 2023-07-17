<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exo 9</h1>
    <p>
        Créer une fonction personnalisée permettant d’afficher des boutons radio avec un tableau de 
        valeurs en paramètre ("Monsieur","Madame","Mademoiselle"). <br>
        Exemple : <br>
        afficherRadio($nomsRadio)

        <?php
                $sexe = array(
                    "Masculin" => 0,
                    "Feminin"=>0,
                    "Autre"=>1
                );

                function afficherRadio(array $sexe){
                    //parcourir le tableau et afficher les input
                    foreach($sexe as $genre => $checked){
                        
                        //Control du check
                        if($checked){
                          $radioBox ='<input type="radio" id="radioBox" name="radioBox" checked>';
                        } else{
                            $radioBox ='<input type="radio" id="radioBox" name="radioBox">';
                        }
                        echo "$radioBox";
                        echo "<label for='radioBox'>$genre</label><br>";
                    }
                  
                }
                
        ?>

        <form action="#">
           <?php  afficherRadio($sexe) ?>
        </form>
        
    </p>
    
</body>
</html>