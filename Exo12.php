<h1> Exo 12</h1>
<p>
La fonction var_dump($variable) permet d’afficher les informations d’une variable. <br>
Soit le tableau suivant : <br>
$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
</p>

<?php
   $tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));
   foreach($tableauValeurs as $key){
    echo var_dump($key)."<br>";
   }
?>