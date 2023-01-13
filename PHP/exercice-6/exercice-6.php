<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 6</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
        <style> #titre {margin-bottom:50px} div{text-align: center ; justify-content: center ; size: 300%} #violet{color:blueviolet}</style>

        <p id="titre">Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur 
            le bouton la page doit afficher ce que vous avez saisie en violet Utilisez $_GET [‘champ1’]</p>

        <form method="get" >
            Entrez votre texte : <input type="text" name="texte">
            <input type="submit">
        </form>

        <?php

        if (!empty($_GET)) 
        {

            if (empty($_GET['texte'])) 
            {
                echo "<div>Il n'y a pas de texte !</div>";
            } 

            else 
            {
                echo "<div id='violet'>".$_GET['texte']."</div>";
            }
        }

        ?>
        
    </body>
</html>