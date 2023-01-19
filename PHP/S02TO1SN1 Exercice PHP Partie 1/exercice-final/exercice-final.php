<?php session_start()?> 
<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice final</title>
        <link rel="stylesheet" href="style.css">                                                                                                    
        <script src="script.js"></script>    
    </head>

    <body>

        <p id="titre">Créer une appli web avec un bouton de connexion qui demande un login et un mot de pass.
             Comparer la valeur saisie avec le mdp et le login qui sera dans le code « Julien » « 1234 »
             - Si le login n’est pas bon afficher toujours le formulaire avec le message le login est inconnu. 
             -Si le mdp n’est pas bon afficher toujours le formulaire avec le message le mot de pass est incorrect.
             -Si le login et le mdp sont ok affichez un message de bienvenue et cachez le formulaire.
             Puis affichez un bouton de déconnexion. Faites en sorte qu’une fois connecté l’utilisateur 
             le reste lorsque on actualise la page. Lorsque l’on clique sur le bouton de déconnexion la session doit être détruite</p>

    
        <?php

        if(isset($_POST["Deconnexion"]))
        {   
            //Si on appuie sur le bouton "Deconnexion", on supprime les données de la session et on la détruit.
            session_unset();
            session_destroy();
        }
       
        if(isset($_POST["Valider"]) && $_POST["password"]=="1234" && $_POST["login"]=="Julien")
        {
                /*Si on a appuyé sur le bouton valider, que l'indentifiant est "Julien" et que le mot de passe est "1234", 
                alors nous somme identifiés. On le met dans la variable "EtatConnexion" qu'on met à "true", soit vraie. */
                $_SESSION["EtatConnexion"] = true ; 
        }

        if(isset($_SESSION["EtatConnexion"]) && $_SESSION["EtatConnexion"]==true)
        {
            //Si on est connecté, alors on affiche "Bienvenue sur le site", avec un bouton de déconnexion.
        ?>       
            <p>Bienvenue sur le site</p>
            <form action="" method="post" class="form-example">
                <div class="form-example">
                    <input type="submit" value="Deconnexion" name="Deconnexion" >
                </div>
            </form>

        <?php
        }
        else 
        {   //Sinon, on n'est pas encore connecté, alors on affiche le formulaire de connexion.
        ?>
            <form action="" method="post">
                <fieldset>
                    <legend>Identifiant</legend>
                    <p>
                        <label for="login">Login :</label> 
                        <input type="text" name="login" id="login"/>
                    </p>
                    <p>
                        <label for="password">Mot de passe :</label> 
                        <input type="password" name="password" id="password" value="" /> 
                        <input type="submit" name="Valider" value="Valider" />
                    </p>
                </fieldset>
            </form>
        <?php 
        }
      
        if(isset($_POST["Valider"])) //Si on appuie sur le bouton "Valider", et que soit le l'identifiant, soit le mot de passe est faux, on affiche les messages d'erreur.
        {
                if($_POST["login"]!="Julien")
                {
                    echo "<p>Ce n'est pas le bon Login !</p>";
                }
                if($_POST["password"]!="1234")
                {
                    echo "<p>Ce n'est pas le bon mdp !</p>";
                }       
        }
       
        ?>

    </body>
            
</html>