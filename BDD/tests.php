<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>test php</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <link rel="icon" type="image/ico" sizes="700x700" href="./icone.jpg">
    </head>

    <body>

    <?php
     
     try {
        if(isset($_POST["Deconnexion"]))
        {   
            //Si on appuie sur le bouton "Deconnexion", on supprime les données de la session et on la détruit.
            session_unset();
        }
        $ipserver ="192.168.64.249";
        $nomBase = "Medecins";
        $loginPrivilege ="root";
        $passPrivilege ="root";
    
        $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);
    

        
        $requete = "select * from Medecin";
        $resultat = $GLOBALS["pdo"]->query($requete);
        //resultat est du coup un objet de type PDOStatement
        $tabMedecins = $resultat->fetchALL();
       

    
    } catch (Exception  $error) {
        echo "error est : ".$error->getMessage();
    }


        ?>


    </body>

</html>