<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2.1</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
        <?php 
            $tab = [1,2,3,4,5];
            ?>


            <p> Créer un tableau php qui contient 5 chiffres. Afficher les 5 chiffres à la suite grace au parcours du tableau dans une boucle for.</p>


            <?php
                for ($i=0;$i<5;$i++)
                {
                    echo "[".$tab[$i]."] ";
                }
            ?>


            <p> B) Essayer d’afficher ses 5 chiffres dans un tableau HTML que génère PHP.</p>    


            <table border="1">
            <caption>Mon beau tableau</caption>
            <tr>
                <?php
                for ($i=0;$i<5;$i++)
                {    
                    echo "<td align='center'>".$tab[$i]."</td>";
                }
                ?>
            </tr>
    </body>

</html>