<?php session_start()?>
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 7</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>    
    </head>

    <body>
        
        <style> #titre {margin-bottom:50px} div{text-align: center ; justify-content: center} #violet{color:blueviolet}</style>


        <p id="titre">Créer un petit formulaire avec une zone de texte et un bouton. Lorsque vous cliquer sur 
            le bouton la page doit afficher ce que vous avez saisie et l’enregistre dans une variable de 
            session $_SESSIONS[]. Le but est que si vous actualisez votre page la variable est 
            mémorisée et le site affiche toujours la valeur saisie.</p>

        <form method="get">
            Entrez votre texte : <input type="text" name="texte">
            <input type="submit">
            <input type="submit" value="Deconnexion" name="Deconnexion" >

        </form>
        
        <?php
        if(isset($_GET["Deconnexion"]))
        {
        session_unset();
        session_destroy();
        } 
        if (!empty($_GET))
        // Si le tableau $_GET existe alors le formulaire a été envoyé
        {
            if (!empty($_SESSION))
            // Si la session $_SESSION existe alors on peut dire qu'elle est la variable mémorisée
            {
                if (empty($_GET['texte'])) 
                // Si le texte $_GET['texte'] écrit est vide alors on le dit
                {
                    echo "<div>Il n'y a pas de texte !</div>";
                    echo "<div>La variable mémorisée est : ".$_SESSION["mem"]."</div>";
                } 

                else 
                // Sinon le texte $_GET['texte'] est écrit en violet
                {
                    echo "<div>La variable actuelle est : <span id='violet'>".$_GET['texte']."</span></div>";
                    echo "<div>La variable mémorisée est : ".$_SESSION["mem"]."</div>";
                    $_SESSION["mem"] = "<span id='violet'>".$_GET['texte']."</span>";
                }
            }

            else
            // Sinon la session $_SESSION n'existe pas encore  alors on peut dire qu'elle n'est pas mémorisée
            {
                if (empty($_GET['texte']))
                // Si le texte $_GET['texte'] écrit est vide alors on le dit
                {
                    echo "<div>Il n'y a pas de texte !</div>";
                    echo "<div>Il n'y a pas de variable mémorisée</div>";
                } 

                else 
                {
                    // Sinon le texte $_GET['texte'] est écrit en violet
                    echo "<div>La variable actuelle est : <span id='violet'>".$_GET['texte']."</span></div>";
                    echo "<div>Il n'y a pas de variable mémorisée</div>";
                    reset($_SESSION);
                    $_SESSION["mem"] = "<span id='violet'>".$_GET['texte']."</span>";
                }
            }
        }

   
        ?>
        
    </body>
</html>