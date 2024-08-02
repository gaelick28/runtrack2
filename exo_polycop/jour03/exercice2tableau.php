<?php

// recette gateau 1
$ingredient1=["spiced salade", "chocolat","oeufs", "banane","miel"];
$quantité1= [100, 120, 10, 75, 80];

$ingredient2=["pasteque", "lait","noix", "guarana","levure"];
$quantité2= [100, 120, 10, 75, 80];

$ingredient3=["beurre", "vanille","poudre d'amande", "cerise","yaourt"];
$quantité3= [100, 120, 10, 75, 80];


function affichage ($ingredient, $quantité){
    for($n=0; $n < count($ingredient); $n++) {
        echo "Mon gâteau comprend tel ingredient :" . $ingredient[$n]. " en telle quantité :" .$quantité[$n] ."<br/><br/>";

    }

}

affichage ($ingredient1,$quantité1);

affichage ($ingredient2,$quantité2);

affichage ($ingredient3,$quantité3);






