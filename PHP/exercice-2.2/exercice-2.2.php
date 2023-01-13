<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2.2</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
    
        <p> A) Créer un tableau php qui contient un nom un prenom et un mot de passe et qui a pour indice de colonne: Nom, Prenom, 
            MDP. Afficher ce tableau avec la commande echo Tableau[‘Nom’] ect</p>
        
        
        <?php
            $tabb = array("Nom" => "Hurtel", "Prénom" => "Joris", "MDP" => "AbricotPhp");

            echo "<p></p> Nom = [".$tabb["Nom"]."] ; Prénom = [".$tabb["Prénom"]."] ; Mot de passe = [".$tabb["MDP"]."]";
        ?>


    </body>
</html>