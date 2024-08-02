<?php

$painauchocolat = 0;
$croissant = 0;
$brioche = 0;

$etudiant = $_GET["etudiant"];


if ($etudiant == "theo") {
    $brioche = 2; 
    $painauchocolat = 3;

    echo $painauchocolat ."<br>";
    echo $brioche;
}

if ($etudiant == "walid") {
    $painauchocolat = 7;
    echo $painauchocolat . "<br>";  
    $croissant = 6; 
    echo $croissant;
}

