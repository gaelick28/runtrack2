<?php

$infractions = [45, 67, 89, 113, 96];

$somme=0;
$moyenne=0;

$nombre_infractions = count ($infractions);

// calcul de la somme
    for ($i=0; $i< $nombre_infractions; $i++){
        $somme += $infractions[$i];
    }

echo "La somme est " . $somme ."<br/>";

// calcul de la moyenne
$moyenne= $somme/$nombre_infractions;

echo "La moyenne est " . $moyenne."<br/>";

//afficher message erreur

if ($moyenne>50) {
    echo "L'amende sera corsée";
} else {
    echo "félicitations, vous êtes un bon conducteur";
}

