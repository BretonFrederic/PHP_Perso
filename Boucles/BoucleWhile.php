<?php
/*
l'escargot dans le puits

l'escargot grimpe de 7 pieds chaque jour et recule de 2 pieds chaque nuit.
Combien de jours faudra t-il à l'escargot pour sortir d'un puits avec la profondeur donnée.

Valeur en entrée :
exemple 1 : 31
exemple 2 : 42

Valeur en sortie :
exemple 1 : 6
exemple 2 : 8

Explication : Décomposons la distance parcourue par l'escargot chaque jour :

Jour 1 : 7 - 2 = 5

Jour 2 : 5 + 7 - 2 = 10
Jour 3 : 10 + 7 - 2 = 15
Jour 4 : 15 + 7 - 2 = 20
Jour 5 : 20 + 7 - 2 = 25

Jour 6 : 25 + 7 = 32

Ainsi, le sixième jour, l'escargot atteindra 32 pieds et sortira du puits pendant la journée, 
sans retomber cette nuit-là.
Astuce : Vous pouvez utiliser une boucle pour calculer la distance parcourue par l'escargot 
chaque jour, et rompre la boucle lorsqu'il atteint la distance souhaitée.
*/

/* VARIABLES */
$profondeur = 31;
$distanceParcourue = 0;
$days = 0;

/* TRAITEMENT */
while($distanceParcourue < $profondeur)
{
    $days++;
    if($days == 1)
    {
        $distanceParcourue = 7-2;
    }
    elseif($days > 1 && $distanceParcourue+10 < $profondeur)
    {
        $distanceParcourue += 7-2;
    }
    else
    {
        $distanceParcourue += 7;
    }
}

/* AFFICHAGE */
echo "La profondeur du puit est de ".$profondeur." Pieds\n";
echo "L'escargot sortira du puit en ".$days." jour(s)";
?>