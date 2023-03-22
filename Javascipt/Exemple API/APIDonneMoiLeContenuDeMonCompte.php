<?php
    //page de traitement de l'appel API depuis un code javascript
    //je vais juste retourner un chiffre aléatoire
    //mais je pourrais récupérer des données POST ou GET
    // je pourrais faire des actions metier ( exemple de calculs)
    // je pourrais faire des actions sur ma BDD
    $retour[0] = rand(0, 1000);
    $retour[1] = "Julien";



     $ipserver ="192.168.64.249";
     $nomBase = "Test";
     $loginPrivilege ="root";
     $passPrivilege ="root"; 
     // On initialise l'objet PDO.
     $GLOBALS["pdo"] = new PDO('mysql:host=' . $ipserver . ';dbname=' . $nomBase . '', $loginPrivilege, $passPrivilege);

    if(isset($_GET["donne"])){
        $retour[2] = $_GET["donne"];
        //enregistrer en BDD la donnée
    }
    else{
        echo "toto1";
    }
    if(isset($_POST["donne2"])){
        $retour[3] = $_POST["donne2"];
        //enregistrer en BDD la donnée
    }  else{
        echo "toto2";
    }

    if(isset($_POST["donne2"]) && isset($_GET["donne"]) ){
        $requete4 = "INSERT INTO `Test`(Id, nom, nombredonne, nombredonne2) VALUES ('" .$retour[0]. "','".$retour[1]."','".$retour[2]."','".$retour[3]."')";
        $resultat4 = $GLOBALS["pdo"]->query($requete4);
        //resultat est du coup un objet de type PDOStatement
    }  else{
        echo "toto3";
    }



/*
        $requete = "select * from Test";
        $resultat = $GLOBALS["pdo"]->query($requete);
        //resultat est du coup un objet de type PDOStatement
        $tabTest = $resultat->fetchALL();

*/

        



    
    
   

    

    // il est préferable de retourner un string compatible JSON

    echo json_encode($retour);
    echo "                                    gros espace                            ";
    for ($i=0; $i < sizeof($retour); $i++) { 
        echo $retour[$i];
    }

?>