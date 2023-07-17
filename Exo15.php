<h1>Exo 15</h1>
<p>
En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, <br> vérifier si une adresse e-mail a le bon format.    
</p>

<?php
    $email = "elan@elan-formationfr";

    if(filter_var($email,FILTER_VALIDATE_EMAIL)){
        echo "<span style='color:green;'>L'adresse email est valide !<span>";
    }else{
        echo "<span style='color:red;'>L'adresse email est invalide<span>";

    }
?>