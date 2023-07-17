<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="exo2.css">
    <title>Document</title>
</head>
<body>
<h1>Exo4</h1>
<p>
    <code>$capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");
    <br>
    </code>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le nom du pays s’affichera en majuscule et que le tableau est trié par ordre alphabétique du nom de pays) <br> grâce à une fonction personnalisée.Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);
</p>

<?php
    $capitales = array("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");
    var_dump($capitales);

    function afficherTableHTML(array $capitales){
        asort($capitales); //trier le tableau par ordre alphabetique de villes
        //parcourir le tableau et les ajouter les lien en fonction des villes
        foreach($capitales as $pays => $ville){
            strtoupper($pays);
            switch($ville){
                case 'Berlin':
                    echo "<tr>
                    <td>$pays</td>
                    <td>$ville</td>
                    <td> <a href= https://fr.wikipedia.org/wiki/Berlin target=_blank>Lien</a></td>
                 </tr>";
                    break;
                case 'Madrid':
                    echo "<tr>
                    <td>$pays</td>
                    <td>$ville</td>
                    <td> <a href= https://fr.wikipedia.org/wiki/Madrid target=_blank>Lien</a></td>
                 </tr>";
                    break;
                case 'Paris':
                    echo "<tr>
                    <td>$pays</td>
                    <td>$ville</td>
                    <td> <a href= https://fr.wikipedia.org/wiki/Paris target=_blank>Lien</a></td>
                 </tr>";
                     break;
                case 'Rome':
                    echo "<tr>
                    <td>$pays</td>
                    <td>$ville</td>
                    <td> <a href= https://fr.wikipedia.org/wiki/Rome target=_blank>Lien</a></td>
                 </tr>";
                    break;
                case 'Washington':
                    echo "<tr>
                            <td>$pays</td>
                            <td>$ville</td>
                            <td><a href= https://fr.wikipedia.org/wiki/washington target=_blank>Lien</a></td>
                        </tr>";
                    break;
                default:
                echo "Ville inconnu";
            }
   
        } 
    } 
?>
<br>
<br>
<table>
    <thead>
        <tr>
            <th>Pays</th>
            <th>Capitales</th>
            <th>Lien wiki</th>
        </tr>
    </thead>
    <tbody>
        
        <?php afficherTableHTML($capitales); //appeler le tableau?>
    </tbody>
</table>


</body>
</html>
