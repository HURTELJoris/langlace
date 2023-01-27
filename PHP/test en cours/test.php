<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>test php</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <link rel="icon" type="image/ico" sizes="700x700" href="./icone">
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
        ?>
        <form action="" method="post">
            <select name = "IdMedecin">
                <?php
                foreach ($tabMedecins as $Medecin) {
                echo '<option value="'.$Medecin["id"].'"> '.$Medecin["nom"]." ".$Medecin["prenom"].'</option>';
                }
                ?>
            </select>
       
        <?php
        $requete2 = "select * from Patient";
        $resultat2 = $GLOBALS["pdo"]->query($requete2);
        //resultat est du coup un objet de type PDOStatement
        $tabPatient = $resultat2->fetchALL();
        ?>
    
            <select name = "IdPatient">
                <?php
                foreach ($tabPatient as $Patient) {
                echo '<option value="'.$Patient["id"].'"> '.$Patient["nom"]." ".$Patient["prenom"].'</option>';
                }
                ?>
            </select>
        <?php
        $requete3 = "select * from Consultation";
        $resultat3 = $GLOBALS["pdo"]->query($requete3);
        //resultat est du coup un objet de type PDOStatement
        $tabDate = $resultat3->fetchALL();
        ?>
    
            <select name = "IdDate">
                <?php
                foreach ($tabDate as $Consultation) {
                echo "<option value=".$Consultation['Dateheure']."> ".$Consultation['Dateheure']."</option>";
                }
                ?>
            </select>
            <input type="datetime-local" name="laDate">
            <p>
            <input type="submit" name="Valider" value="Valider" />
            </p>

        </form>

    <?php

    if(isset($_POST["Valider"]))
    {
        echo "Votre id de Medecin est : ".$_POST["IdMedecin"]."  Celui du patient est : ".$_POST["IdPatient"]." La date est : ".$_POST["IdDate"];
        ?>
        <p>
            <form action="" method="post" class="form-example">
                <div class="form-example">
                    <input type="submit" value="Deconnexion" name="Deconnexion" >
                </div>
            </form>
        </p>
        <?php
        echo $_POST["laDate"];
        $requete4 = "INSERT INTO `Consultation`(Dateheure, idMedecin, idPatient) VALUES ('" .$_POST["laDate"]. "','".$_POST["IdMedecin"]."','".$_POST["IdPatient"]."')";
        $resultat4 = $GLOBALS["pdo"]->query($requete4);
        //resultat est du coup un objet de type PDOStatement

    }
    } catch (Exception  $error) {
        echo "error est : ".$error->getMessage();
    }


        ?>


    </body>

</html>