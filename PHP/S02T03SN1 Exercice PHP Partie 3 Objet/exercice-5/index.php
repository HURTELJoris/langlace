<!doctype html>
<html lang="fr">
    <head>
         <meta charset="utf-8">
         <title>Exercice 5. (objet PDO Select)</title>
         <link rel="stylesheet" href="style.css">
         <script src="script.js"></script>
         <link rel="icon" type="image/ico" sizes="700x700" href="../../img/icone.jpg">
    </head>
    <body>

        <p>
        1) Créer en BDD une table personnage avec les propriétés de la classe personnage. (Pensez toujours à rajouter un champ id)
        
        2) Créer plusieurs Personnage avec phpMyadmin dans votre Table
        
        3) Modifier votre constructeur de Classe pour avoir en paramètre un id
        
        4) Dans votre classe Personnage instancier un objet PDO dans la méthode
        constructeur puis faites un select * from personnage where id = id . ( je vous
        conseil de mettre l’objet PDO dans une propriété de votre classe )
        
        5) Initialiser les propriétés de votre Classe Personnage avec les données récupéré de la requête BDD
        
        6) Instancier un Personnage et afficher ses informations. Exemple : $P1 = new Personnage(12) ; $P1->AfficherPersonnage() ;
        </p>

        <?php
            class Personnage
            {
                // déclaration de/des propriété(s)
                private $id;
                private $Speudo;
                private $Vie;
                private $Attaque;
                private $ipserver ="localhost";
                private $nomBase = "jeu";
                private $loginPrivilege ="root";
                private $passPrivilege =""; 

                // déclaration de la/des méthode(s)
                // constructeur avec comme paramètre l'id du personnage.
                public function __construct($newid) {
                    try {
                        //code...
                        // Le l'id du personnage est maintenant l'id qui a été donnée.
                        $this->id = $newid;
                        // On initialise l'objet PDO.
                        $GLOBALS["pdo"] = new PDO('mysql:host=' . $this->ipserver . ';dbname=' . $this->nomBase . '', $this->loginPrivilege, $this->passPrivilege);
                        // On initialise la requête mySQL en fonction de l'id donnée.
                        $requete = "select * from personnage WHERE id = ".$newid;
                        $resultat = $GLOBALS["pdo"]->query($requete);
                        //resultat est du coup un objet de type PDOStatement
                        $tabpersonnage = $resultat->fetchALL();
                        foreach ($tabpersonnage as $personnage) {
                            // Le speudo du personnage est maintenant le speudo qui a été récolté dans la BDD.
                            $this->Speudo = $personnage["speudo"];
                            // Le vie du personnage est maintenant la vie qui a été récoltée dans la BDD.
                            $this->Vie = $personnage["vie"];
                            // Le l'attaque du personnage est maintenant l'attaque qui a été récoltée dans la BDD.
                            $this->Attaque = $personnage["attaque"];
                            }
                 
                    } catch (exception $e) {
                        //throw $th;
                        die('Erreur'.$e->getMessage());
                    }
                }
                // fonction qui affiche toutes les informations du presonnage.
                public function getall(){
                    // affiche la vie du personnage.
                    echo "<div>Points de vie : ".$this->Vie."</div>";
                    // affiche le speudo du personnage.
                    echo "<div>Speudo : ".$this->Speudo."</div>";
                    // affiche l'attaque du personnage.
                    echo "<div>Attaque : ".$this->Attaque."</div>";
                }
                // fonction qui revoie la vie du presonnage.
                public function getVie(){
                   return $this->Vie;
                }
                // fonction qui revoie le speudo du personnage.
                public function getSpeudo(){
                    return $this->Speudo;
                }
                // fonction qui revoie l'attaque du personnage.
                public function getAttaque(){
                    return $this->Attaque;
                }
                // fonction qui permet à un personnage d'attaque un autre personnage donné en paramètre.
                public function attaquer($Autrepersonnage){
                    // On appelle la fonction getSpeudo() pour avoir le speudo de l'autre personnage.
                    $ASpeudo = $Autrepersonnage -> getSpeudo();
                    // Petite phrase pour savoir le déroulement du combat.
                    echo $this->Speudo." attaque ".$ASpeudo.". ".$ASpeudo." perd ".$this->Attaque." points de vie.";
                    // Appel de la fonction défense de l'autre personnage afin que l'autre personnage puisse perdre de la vie.
                    $Autrepersonnage -> défense($this->Attaque);
                }
                /* fonction qui permet à un personnage de perdre de la vie en fonction d'une attaque, si la fonction attaquer et appellée avant 
                ,alors le paramètre sera l'attaque du personnage ayant attaqué le personnage et paramètre d'appel de la fonction défense.*/
                public function défense($VAttaque){
                    // On retire de la vie au personnage
                    $this->Vie -= $VAttaque;
                    // Puis, on le confirme avec un phrase.
                    echo " Il a maintenant ".$this->Vie." points de vie.";
                }
            }

            // On instancie un nouveau personnage avec comme id, 1.
            $personnage1 = new Personnage(1); 
            // On instancie un nouveau personnage avec comme id, 2.
            $personnage2 = new Personnage(2);
            // On dit au personnage1 d'attaquer le personnage2.
            $personnage1 -> attaquer($personnage2);
            // On demande toutes les informations du personnage1 afin de savoir si on a bien récolté les données de la BDD.
            $personnage1->getall();
        ?>    

        <div class="bouge"></div>

        <?php
            $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
            highlight_string($code);
        ?>

    </body>
</html>