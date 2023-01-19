<?php function Mafonction($colon1,$colon2,$colon3)
{?>
    <table style="border: 2px solid blue;">
  <tr>
    <th><?=$colon1?></th>
    <th><?=$colon2?></th>
    <th><?=$colon3?></th>
  </tr>
  <tr>
    <td>Pomme</td>
    <td>Carotte</td>
    <td>plouf</td>
  </tr>
  <tr>
    <td>Banane</td>
    <td>Aubergine</td>
    <td>toto</td>
  </tr>
  
</table>
<?php
    return 1;
}
?>


<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]>      <html class="no-js"> <![endif]-->
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="">
</head>

<body>
    <?php
     Mafonction("fruit","legume","autre");
     $resultat = Mafonction("nom","prenom","age");

     $tab = array(array(1,2,5,6),array(1,2,5,6),array(1,2,5,6),array(1,2,5,6));

     //foreach ( tableau as la vlaeur)
     foreach ($tab as  $soustable) {
      foreach ($soustable as  $value) {
        echo $value;
       }
     }
     $code = file_get_contents($_SERVER['SCRIPT_FILENAME']);
highlight_string($code);
    ?>
</body>

</html>