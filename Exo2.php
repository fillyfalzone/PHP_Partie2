<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exo2.css">
    <title>Document</title>
</head>
<body>
h1>Exo2</h1>
<p>
    <code>$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    <br>
    </code>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) <br> grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<?php
    $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");

    function afficherTableHTML(array $capitales){
        ksort($capitales);
        foreach($capitales as $pays => $ville){
            
            echo "<tr>
                    <td style='text-transform:uppercase'>$pays</td>
                    <td>$ville</td>
                 </tr>";
        } 
    }
    
?>

<table >
    <thead>
        <tr >
            <th >Pays</th>
            <th>Capitales</th>
        </tr>
    </thead>
    <tbody>
        <?php afficherTableHTML($capitales);?>
    </tbody>
</table>


</body>
</html>
<