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
        if(isset($_POST["nom"]))
        {
            echo "<div> tu es :".$_POST["nom"]. ". </div>";
        }
        else
        {
            echo "Veuillez saisir votre nom : ";
        }



        ?>

        <form action="" method="post">
            <input type="text" name="nom">
            <input type="submit" name="formulairedeNom">
        </form>

    </body>

</html>