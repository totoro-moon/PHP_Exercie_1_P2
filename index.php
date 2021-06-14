<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 2 Exercice 1 </title>
</head>
<body>
    <h1># Exercice 1</h1>
<p>Créez une boucle qui affiche les nombres de 0 à 10.
</p>
<!-- <?php
$n=0;
while ($n <=10){
    echo '<p> Ceci affiche : '.$n.'.</p>';
    $n++;
}
?> -->

<?php
$n=0;
while ($n <=10){
    ?>
   <p>Ceci affiche : <?= $n ?></p>
   <?php $n++ ;
}
?>

</body>
</html>