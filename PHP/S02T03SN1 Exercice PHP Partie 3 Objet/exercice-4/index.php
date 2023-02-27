<!doctype html>
<html lang="fr">
    <head>
         <meta charset="utf-8">
         <title>Exercice 4. (interaction entre objet)</title>
         <link rel="stylesheet" href="style.css">
         <script src="script.js"></script>
         <link rel="icon" type="image/ico" sizes="700x700" href="../../img/icone.jpg">
    </head>
    <body>

        <p>
        Les méthodes des classes peuvent prendre des paramètres ( $variables ) qui peuvent
        être aussi des Objets
            
            1) créer une méthode "attaquer" qui prend en paramétre un autre personnage
            
            2) créer une méthode " défense" qui prend en paramètre une valeur d’attaque.
           
            3) Implémenter la méthode attaquer : elle doit appeler la méthode défense de l’objet
            personnage passé en paramètre et lui mettre 50 de dégat
            
            4) Implémenter la méthode défense pour que la valeur d’attaque passée en
            paramètre décrémente la propriété vie du personnage.
            
            5) Rajouter des méthodes et des echos pour afficher les etapes de jeu.
            
            6) Instancier 2 personnage dont l’un attaque l’autre.
            
            7) Afficher le résultat de déroulement de l’attaque en HTML.
        </p>

        <?php
            class Personnage
            {
                // déclaration de/des propriété(s)
                private $Speudo;
                private $Vie;
                private $Attaque;
             
                // déclaration de la/des méthode(s)
                // constructeur avec comme paramètres un speudo, de la vie, et de l'attaque.
                public function __construct($newSpeudo,$newVie,$newAttaque) {
                    // Le speudo du personnage est maintenant le speudo qui a été donné.
                    $this->Speudo = $newSpeudo;
                    // Le vie du personnage est maintenant la vie qui a été donnée.
                    $this->Vie = $newVie;
                    // Le l'attaque du personnage est maintenant l'attaque qui a été donnée.
                    $this->Attaque = $newAttaque;
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

            // On instancie un nouveau personnage avec comme speudo Julien, comme vie 100, et comme attaque 100.
            $personnage1 = new Personnage("JulienCode",100,100);
            // On instancie un nouveau personnage avec comme speudo Rapidecho, comme vie 100, et comme attaque 50.
            $personnage2 = new Personnage("Rapidecho",100,50);
            // On dit au personnage1 d'attaquer le personnage2.
            $personnage1 -> attaquer($personnage2);
        ?>    

        <div class="bouge"></div>

        <?php
            $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
            highlight_string($code);
        ?>

    </body>
</html>