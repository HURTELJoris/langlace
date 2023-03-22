<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice Test</title>
        <link rel="stylesheet" href="style.css">
        <script src="exo5.js"></script>
        <link rel="icon" type="image/ico" sizes="700x700" href="../../icone.jpg">
    </head>
    <body>
        <button onclick="mafonction()" id="TEST">Clique moi dessus</button>
        <div id="toto"></div>
        <?php
        if (isset($_POST['tata'])){
            echo $_POST['tata'];
        }
        else echo "error";
        ?>
    </body>
</html>