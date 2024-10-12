<?php
/* VARIABLES */
$nom = "John Wick";
$prixHotel = 70;
$nombreJours = 7;
$prixTotal = 0;

/* TRAITEMENT */
for($compteur = 0; $compteur < $nombreJours; $compteur++)
{
    $prixTotal += $prixHotel;
}

/* AFFICHAGE */
echo $nom." avez passé ".$nombreJours." nuit(s) à l'hôtel \"Continental\".\n";
echo "Prix de votre séjour : ".$prixTotal." euros.";
?>