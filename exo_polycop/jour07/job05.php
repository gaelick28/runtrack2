<?php

$str = "lijima";

function occurrences($str, $char) {
    // Initialiser le compteur d'occurrences
    $compteur = 0;

    // Parcourir chaque caractère de la chaîne
    for ($n = 0; $n < strlen($str); $n++) {
        // Vérifier si le caractère actuel est égal au caractère recherché
        if ($str[$n] === $char) {
            // Incrémenter le compteur si c'est le cas
            $compteur++;
        }
    }

    // Retourner le nombre d'occurrences
    return $compteur;
}

echo occurrences ($str,"i");
