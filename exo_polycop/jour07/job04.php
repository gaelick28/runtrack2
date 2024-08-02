
<?php

function calcule($a,$operation,$b) {
    $resultat = 0;

    if ($operation == 'addition') {
        $resultat = $a + $b;
        echo $resultat;

    } elseif ($operation== 'soustraction') {
        $resultat = $a - $b;
        echo $resultat;

    } elseif ($operation== 'multiplication') {
        $resultat = $a * $b;
        echo $resultat;

    } elseif ($operation== 'division') {
        if ($b!=0) {
        $resultat = $a / $b;
        echo $resultat; 
        } else {
            $resultat = "PAS DE DIVISION";
        } 

    }elseif ($operation=='modulo') {
        if ($b!=0) {
        $resultat = $a % $b;
        echo $resultat;
        } else {
            $resultat = "PAS DE DIVISION" ;
        }
    }
    }

$valeurRetour = calcule(15, "multiplication", 3);
//echo $valeurRetour;

?>
