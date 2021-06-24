<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Partie 8</title>
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Jost:wght@200&display=swap" rel="stylesheet">
</head>
<body>

<h2>Exercice 1</h2>
<p>Afficher la date du jour au format année/mois/jour</p>

<?php
$date = date("d-m-Y");
$heure = date("H:i");
Print("Nous sommes le $date et il est $heure");
?>

<h2>Exercice 2</h2>
<p>Afficher la date du jour au format année-mois-jour</p>

<?php

setlocale(LC_TIME, 'fra_fra');
 
echo strftime('%Y-%m-%d %H:%M:%S');  
echo strftime('%A %d %B %Y, %H:%M'); 
echo strftime('%d %B %Y');           
echo strftime('%d/%m/%y');           
?>

<h3>Exercice 3</h3>
<p>Afficher la date du jour avec le jour de la semaine en lettres, en chiffres, le mois en lettres et l'année. Ex : Wednesday 23 June 2021</p>

<?php

setlocale(LC_TIME, 'fra_fra');
 
echo strftime('%d %B %Y');           // 11 octobre 2012

?>

<h2>Exercice 4</h2>
<p>Afficher la date du jour avec le jour de la semaine en lettres, en chiffres, le mois en lettres et l'année en français. Ex : Mercredi 23 Juin 2021</p>

<?php
setlocale(LC_ALL, "en_US.UTF-8");
date_default_timezone_set('Europe/Paris');
echo utf8_encode(strftime('%A %d %B %Y, %H:%M'));
?>



<h2>Exercice 5</h2>
<p>Afficher le timestamp courant et afficher le timestamp du 1er février 2021.</p>

<?php
            echo 'Timestamp actuel : ' .time(). '<br>';
            echo 'Timestamp actuel (avec mktime()) : '.mktime(). '<br>';
            $t1 = mktime(8, 30, 0, 2, 1, 2021);
            $gmt1 = gmmktime(8, 30, 0, 2, 1, 2021);
            echo 'Timestamp 1 février 2021 08h30 (GMT+1) : ' .$t1. '<br>';
            echo 'Timestamp 1 février 2021 08h30 (GMT) : ' .$gmt1. '<br>';
        ?>

<h2>Exercice 6</h2>
<p>Afficher le nombre de jours du mois de février 2021.</p>

<?php
function jourdansmois($mois , $an){
     $enmois = $an*12 + $mois; 
      if (($enmois > 2037 * 12 -1) || ($enmois<1970)){return 0;} 
      $an_suivant = floor(($enmois+1)/12); 
      $mois_suivant = $enmois + 1 - 12 * $an_suivant; 
      $duree=mktime(0, 0, 1, $mois_suivant, 1, $an_suivant)-mktime(0, 0, 1, 
$mois, 1, $an);
      return ($duree/(3600*24)); 
    }
?>

<?php
    echo jourdansmois(02, 2021);
    // Affiche : 31

?>
</body>
</html>
