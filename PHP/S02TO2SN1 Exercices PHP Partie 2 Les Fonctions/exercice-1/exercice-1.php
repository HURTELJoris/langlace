<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 1 Fonction de base</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>
    <body>
        <p>Ecrire une fonction qui affiche un tableau HTML. Et appeler cette fonction en haut et en 
           bas de votre bage HTML  
        </p>
        <?php 
            function tableau(){
                echo"
                    <table border= 1px>
                        <th>
                        "; 
                        for($i = 0 ; $i<10; $i++)
                        {
                            echo"<td>[test".$i."test]</td>";
                        }
                echo " </th>
                    </table>
                ";                     
            }

            tableau();
            echo "<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>";
            tableau();
            $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
            highlight_string($code);
        ?>
    </body>

</html>