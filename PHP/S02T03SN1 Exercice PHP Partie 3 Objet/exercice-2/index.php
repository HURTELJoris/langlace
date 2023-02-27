<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 2. (création d’un constructeur)</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <link rel="icon" type="image/ico" sizes="700x700" href="../../img/icone.jpg">
    </head>
    <body>

        <p>
            Une classe peu posséder une méthode spéciale : « constructeur ». Cette méthode est
            automatiquement appelée lorsqu’un objet de cette classe est instancié (créée)
            
                1) Créer une classe Personnage qui possède 2 propriétés : Speudo et Vie ainsi qu’un
                constructeur vide : public function __construct(){}
                
                2) Implémenter le constructeur pour qu’il initialise la propriétés vie à 100
        </p>

        <?php 
            class Personnage
            {
                // déclaration de/des propriété(s)
                private $Speudo;
                private $Vie;
            
                // déclaration de la/des méthode(s)
                // constructeur 
                public function __construct() {
                    // initialise la vie du personnage à 100.
                    $this->Vie = 100;
                }
            }
            $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
            highlight_string($code);
        ?>
    </body>
</html>