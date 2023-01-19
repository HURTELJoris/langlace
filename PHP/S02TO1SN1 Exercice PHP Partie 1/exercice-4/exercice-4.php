<!doctype html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <title>Exercice 4</title>
        <link rel="stylesheet" href="style.css">
        <script src="script.js"></script>
    </head>

    <body>
       
        <style> #titre {margin-bottom:50px}</style>
        <p id = "titre">Créer un petit programme php qui résout une équation du second degré de type Ax2 + Bx + C = 0. 
            Comme on ne maitrise pas pour le moment les entrées utilisateur les variables A, B et C seront rentré manuellement dans le programme. </p>
     
        
        <?php
            $A = rand(1,10) ; // rand de 1 à 10 car A ne peut pas être égal à 0.
            $B = rand(0,10) ;
            $C = rand(0,10) ;
            $delta = ($B*$B) - (4*$A*$C) ;
            
            echo("<p>Votre équation est : ".$A."x2 + ".$B."x + ".$C." = 0. </p>");
            echo("<p>Delta est égal à : ".$delta.".</p>");

            if($delta<0) 
            echo("Votre équation n'a pas de solution dans |R.");
            else if($delta==0)
             {
             $x0=-$B/2*$A;
             echo("Votre équation a pour solution : ".$x0.".");
             }
               else if($delta>0)
               {
               $x1=(-$B-(sqrt($delta)))/(2*$A); 
               $x2=(-$B+(sqrt($delta)))/(2*$A);
               echo("Votre équation admet deux solutions : ".$x1." et ".$x2.".");
               }            
            
        ?>

    </body>
</html>