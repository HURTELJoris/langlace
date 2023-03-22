<html>
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Exercice Test</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="style.css">
    <link rel="icon" type="image/ico" sizes="700x700" href="../icone.jpg">
    
    </head>
    <body>

        <h1>Exercice  Avancé</h1>
        <br>
        <div onclick="mafunction()">Je suis un bouton </div>
        <div id="NumCompte"></div>
        Entre un nombre = 
        <input id="DonneAEnvoyer" type="text">
        <script src="source.js"></script>


        <?php
            $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
            highlight_string($code);
        ?>
    </body>
</html>