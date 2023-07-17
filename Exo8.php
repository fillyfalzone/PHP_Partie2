<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>EXO 8</h1>
    <p>
            Soit l’URL suivante : 
        Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.
        Exemple :
        repeterImage($url,4);
    </p>
    

    <?php
        $url = 'http://my.mobirise.com/data/userpic/764.jpg';  //stoker la balise de  l'image dans la variable
        $nbRepeat = ""; // ini du nb de repeat

        function repeterImage($url, $nbRepeat){
            //creer le repeat avec la loop for
            for($i = 0; $i < $nbRepeat; $i++){
              echo "<img src='".$url."' atl='petit chien'>";
            }
        }
    ?>

    <?php
        repeterImage($url,10);
    ?>

</body>
</html>