
<?php
if (isset($_GET["a"]) && isset($_GET["b"]) && isset($_GET["operation"])){
$a=$_GET["a"];
$b=$_GET["b"];
$operation = $_GET['operation'];
$resultat = '';


if ($operation == 'addition') {
    $resultat = $a + $b;
    $signe = '+';
    echo $resultat;
} elseif ($operation== 'soustraction') {
    $resultat = $a - $b;
    $signe = '-';
    echo $resultat;
} elseif ($operation== 'multiplication') {
    $resultat = $a * $b;
    $signe = '*';
    echo $resultat;
} elseif ($operation== 'division') {
    if ($b!=0) {
    $resultat = $a / $b;
    $signe = '/';
    echo $resultat; 
    } else {
        $resultat = "PAS DE DIVISION";
    } 
}elseif ($operation=='modulo') {
    if ($b!=0) {
    $resultat = $a % $b;
    $signe = '%';
    echo $resultat;
    } else {
        $resultat = "PAS DE DIVISION" ;
    }
}
}
?>






