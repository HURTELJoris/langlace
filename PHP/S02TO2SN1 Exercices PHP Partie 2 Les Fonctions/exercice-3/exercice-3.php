<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 3 Fonction qui retourne un résultat</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
    <p>Ecrire une fonction qui calcul la moyenne d’un tableau qu’on passe en paramètre et qui
       retourne ce résultat dans une variable. Afficher le contenue de cette variable en bas de
       page.
    </p>   
        <?php function Mafonction($tableau)
        {
            $somme = 0;
            for($i=0;$i<sizeof($tableau);$i++)
            {
                $somme += $tableau[$i]; 
            }
            $moyenne = $somme/sizeof($tableau);
            return $moyenne;
        }

        $jaaaj = [28,78,78,000,54];
        echo "<p> Le tableau est : ";
        for($i=0;$i<sizeof($jaaaj);$i++)
            {
                echo "[".$jaaaj[$i]."]"; 
            }
        echo "</p>";

        
        echo "<p>La moyenne est : ".Mafonction($jaaaj)."</p>";
        $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
        highlight_string($code);
        ?>

    </body>
</html>