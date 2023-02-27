<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 1. (création d’une classe en php)</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
        <link rel="icon" type="image/ico" sizes="700x700" href="../../img/icone.jpg">
    </head>
    <body>

        <p>Vous devez faire cet exercice en suivant le cours ( ne pas copier coller le code de vos
            anciens exercices ! ) le code source doit être disponible dans votre github dans un
            repertorie PhpObjet. Le code source doit être visible sur votre page dans une balise : <pre></pre>
                
                1) Créer une classe User qui possède 2 propriétés :
                Nom et Prenom ainsi qu’une methode afficheUser
                qui echo « je suis un User »
                
                2) Créer 1 users dans votre page index.html puis
                appeler sa méthode afficheUser
                
                3) En disign CSS HTML reproduiser le schémas de
                classe de votre objet : exemple :
        </p>
        <?php 
            class User
            {
                // déclaration de/des propriété(s)
                private $nom;
                private $prenom;
                //ici on utilise pas les propriétés
                // déclaration de la/des méthode(s)
                public function afficheUser() {
                    echo 'je suis un User';
                }
            }
            // on initialise l'utilisateur 1
            $User1 = new User();
            // et on lui dit de s'afficher
            $User1 -> afficheUser();



        // petit tableau avec des valeurs fixes vu que le nom et prenom ne sont pas pas demandés. 
        ?>
        <table class="table">
            <tr>
                <th>User</th>
            </tr>
            <tr>
                <td>
                    <div >-Nom : string</div>
                    <div>-Prenom : string</div>
                </td>
            </tr>
            <tr>
                <td class="td">+AfficheUser() : void</td>
            </tr>
        </table>

        <div class="bouge"></div>
        <?php
            $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
            highlight_string($code);
        ?>

    </body>
</html>