
<?php
include "script.php";

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="calculatrice.css">

</head>
<body>
  
<h1> CALCULATRICE </h1>

        <form method="get" action="script.php">
            <input type="number" name="a" required>
                <select name="operation" required>
                    <option value="addition">+</option>
                    <option value="soustraction">-</option>
                    <option value="multiplication">*</option>
                    <option value="division">/</option>
                    <option value="modulo">%</option>
                </select>


        <input type="number" name="b" required >
        <input type="submit" name="calcul" value="Calculer">
    
        <form method="get" action="script.php">
        <input type="number" name="a" required>
        
        <form action="script.php">
            <input type="submit" value="">
        </form>


</body>
</html>



