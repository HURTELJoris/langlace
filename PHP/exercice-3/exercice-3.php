<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 3</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
    
        <p> A) Créer un tableau php qui contient en indice les colonnes ‘nom’ , ‘prenom’ et ‘motDePass’. 
            Remplir ce tableau avec 3 personnes. Afficher se tableau avec une boucle for. </p>
        
        
        <?php
            $tabb = ["Nom" => [1 => "Hurtel", 2 => "Hurtel2", 3 => "Hurtel3",],
                     "Prénom" => [1 => "Joris", 2 => "Joris2", 3 => "Joris3",],
                     "motDePass" =>[1 => "AbricotPhp", 2 => "AbricotPhp2", 3 => "AbricotPhp3",]
                     ];
                     
            for($i=1;$i<4;$i++)
            {
                echo "<p></p> Nom = [".$tabb["Nom"][$i]."] ; Prénom = [".$tabb["Prénom"][$i]."] ; Mot de passe = [".$tabb["motDePass"][$i]."]";
            }
            
        ?>


        <p>B) Essayer d’agrandir votre variable $tableau avec plusieurs nom prénom et MDP , 
            afficher ce tableau en HTML généré par le PHP.</p>


        <?php
        $tabb2 = ["Nom" => [1 => "Hurtel", 2 => "Hurtel2", 3 => "Hurtel3", 4 => "Hurtel4", 5 => "Hurtel5",],
                "Prénom" => [1 => "Joris", 2 => "Joris2", 3 => "Joris3", 4 => "Joris4", 5 => "Joris5",],
                "motDePass" =>[1 => "AbricotPhp", 2 => "AbricotPhp2", 3 => "AbricotPhp3", 4 => "AbricotPhp4", 5 => "AbricotPhp5",]
                ];
                
        for($i=1;$i<6;$i++)
        {
            echo "<p></p> Nom = [".$tabb2["Nom"][$i]."] ; Prénom = [".$tabb2["Prénom"][$i]."] ; Mot de passe = [".$tabb2["motDePass"][$i]."]";
        }
            
        ?>

    </body>
</html>