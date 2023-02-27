<!doctype html>
<html lang="fr">
    <head>
         <meta charset="utf-8">
         <title>Exercice 3. (création d’un constructeur avec paramètre)</title>
         <link rel="stylesheet" href="style.css">
         <script src="script.js"></script>
         <link rel="icon" type="image/ico" sizes="700x700" href="../../img/icone.jpg">
    </head>
    <body>

        <p>
            Une classe peu posséder une méthode spéciale : « constructeur ». Comme c’est une
            méthode elle peu recevoir des paramètres. Attention à partir du moment ou il y a un
            constructeur qui attend des paramètres vous ne pouvez plus instancier votre classe sans paramètre.
                
                1) Reprendre la classe Personnage et implémenter le constructeur pour qu’il
                initialise la propriétés vie à 100 et initialise la propriété speudo avec la valeur
                passer en paramètre
                
                2) Créer un personage Exemple personage1 = new personage("Julien") ;
                
                3) Ajouter une méthode dans votre classe pour afficher le nombre de point de vie du
                personnage ainsi que son speudo
        </p>

        <?php
            class Personnage
            {
                // déclaration de/des propriété(s)
                private $Speudo;
                private $Vie;
             
                // déclaration de la/des méthode(s)
                // constructeur avec comme paramètre un speudo.
                public function __construct($newSpeudo) {
                    // initialise la le speudo du personnage avec le pseudo donné lors de l'appel du constructeur.
                    $this->Speudo = $newSpeudo;
                    // initialise la vie du personnage à 100.
                    $this->Vie = 100;
                }
                // fonction qui affiche toutes les informations du presonnage.
                public function getall(){
                    // affiche la vie du personnage.
                    echo "<div>Points de vie : ".$this->Vie."</div>";
                    // affiche le speudo du personnage.
                    echo "<div>Speudo : ".$this->Speudo."</div>";
                }
            }
            // On instancie un nouveau personnage avec comme speudo Julien.
            $personnage1 = new Personnage("Julien");
            $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
            highlight_string($code);
        ?>

    </body>
</html>