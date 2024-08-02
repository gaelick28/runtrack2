<?php
include "détailproduit.php";
 
   
$id = $_GET['id']??0;

for($i=0; $i<6; $i++){
    if (isset($_GET["id-1"])) {
        $id=  $_GET["id-1"];
        
        $overview = $produits [$id];
    }
    }
    
    


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>galerie d'art</title>
    <link rel="stylesheet" href="produit.css"/>
</head>
                <nav> 
                <h2> <i>vous avez choisi:</i></h2>
                </nav>

        <body>
            
        <div class="principal">  

            <div class ="image"> 
                <img src="<?php echo $produits[$id]["image"] ?>">
            </div class ="image">

            <div class = "prod">
                    <form method="get" action="détailproduit.php">
                    <input type="number" name=" " required min="1">
                    
                    <form action="détailproduit.php">
                    <input type="submit" value="ajouter au panier"> <br/><br/>
                    <img src="panier.php">
            </div class= "prod">

        </div>
        <?php



echo $produits[$id]["name"] ."<br/>"."<br/>";


echo $produits[$id]["overview"]."<br/>"."<br/>";


//echo $produits[$id]["image"]."<br/>"."<br/>";


echo $produits[$id]["price"]."<br/>"."<br/>";



?>
</body>

<footer> <h6><i>© a lotus spirit product Cannes 2024</i></h6></footer>
</html>
