<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 5</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
        <style> #titre {margin-bottom:50px} div{text-align: center ; justify-content: center ; size: 300%; } #rouge{color: red ; }</style>

        <p id="titre">Créer un petit formulaire avec une zone de text et un bouton. Lorsque vous cliquer sur le 
            bouton la page doit afficher ce que vous avez saisie en rouge. Utilisez $_POST[‘champ1’]</p>

        <form method="post">
            Entrez votre texte : <input type="text" name="texte">
            <input type="submit">
        </form>

        <?php

        if (!empty($_POST)) 
        {
  
            if (empty($_POST['texte'])) 
            {
                echo "<div>Il n'y a pas de texte !</div>";
            } 

            else 
            {
                echo "<div id='rouge'>".$_POST['texte']."</div>";
            }
        }

        ?>
        
    </body>
</html>