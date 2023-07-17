<h1>Exo 1</h1>

<p>
Créer une fonction personnalisée convertirMajRouge() permettant de transformer une chaîne de 
caractère passée en argument en majuscules et en rouge.
Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;
</p>

<?php
    function convertirMajRouge(string $texte){
        $texte = strtoupper($texte);
        echo "<span style='color:red;'>$texte</span>";
    }
    convertirMajRouge("mon texte en Maj et rouge");

?>