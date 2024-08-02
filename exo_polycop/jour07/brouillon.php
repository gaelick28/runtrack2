<?php

$id = $_GET['id'];


function tableau ($id,$name,$peintre,$overview,$image,$price){
    echo $name ." est un tableau de " .$peintre ." de ". $overview ." vendu au prix de ". $price;
}

$tableau ("3"," nu couché ", " 1917 ", " Modigliani ", "https://i.ebayimg.com/images/g/wjYAAOSw2S1hi5fx/s-l1600.jpg", " 109,99€ "); 
echo "<br/>";

?>

==========================================================


<?php


// Récupérer l'identifiant de l'article
$id = $_GET['id'];

$tableau=[id, name, overview,image,price];




array(
    "id" => 3,
    "name" => "Produit 3",
    "overview" => "Lorem ipsum dolor sit amet, consectetur adipiscing elit.",
    "image" => "https://www.amazon.com/images.jpeg",
    "price" => 99.99;
)

?>

    <h1> En vente chez Lotus spirit </h1>
        <div class=" tableau">
 <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTM20mcTA1zwdIxzyL2dkt5A8Ae7Q94Y9QV1KdT4pa-RYf8q-7lffCYYEua1rLIJOE7o2c&usqp=CAU">
        
   <div class="intitulés">
        <h4>le cri (the scream's cat)</h4>
        <h6>1917</h6> 
        <h4>  Munch</h4>
    </div>
        </div>

        
<?php echo $produits[2]["name"];?>

<form method="get" action="détailproduit.php">
            <input type="number" name=" " required>
            

            <form action="détailproduit.php">
                <input type="submit" value="name">




                ========================================
                ================================================================

                //echo $id=$id;


                ======================
                echo $produits["$id"][2];

