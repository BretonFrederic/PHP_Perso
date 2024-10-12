<?php

/* VARIABLES */
$nom = "Antenolli";
$age = 12;
$categorie = 0;

/* TRAITEMENT */
if($age >= 18)
{
    $categorie = 3;
}
elseif($age > 12 && $age < 18)
{
    $categorie = 2;
}
elseif($age > 0 && $age < 13)
{
    $categorie = 1;
}
else
{
    $categorie = 0;
}

/* AFFICHAGE */
switch ($categorie)
{
    case 3 :
        echo "Votre nom est : ".$nom."\n";
        echo "Vous avez : ".$age." ans\n";
        echo "Vous êtes un(e) adulte";
        break;
    case 2 :
        echo "Votre nom est : ".$nom."\n";
        echo "Vous avez : ".$age." ans\n";
        echo "Vous êtes un(e) adolescent(e)";
        break; 
    case 1 :
        echo "Votre nom est : ".$nom."\n";
        echo "Vous avez : ".$age." ans\n";
        echo "Vous êtes un(e) enfant";
        break;
    default :
        echo "Vous n'êtes pas né(e) !";
}

?>