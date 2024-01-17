<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
    echo "<p> Document </p>";

    ?>

<h1>Document</h1>

<?php
//en php une variable est toujours préfixée par $
$unechaine ="lorem ipsum sfdfsf";
echo "<p>".$unechaine."</p>"; // en php l'operateur de co


    $x = 1;
    $y = 4;
    $z = $x + $y;
    echo "<p>".$x."+".$y."=".$z."</p>";
    //++,+=;--; -= ; *=, /= %=

    if ($y > 2){
        echo "y est superieur à 2";
    } else if ($y < 2){
        echo "y est inferieur à 2";
    } else{
        echo "x est egal 2";
    }
// > , < , >= , <= , == , !=
$cvrai = true;
if($cvrai) {
    echo "<p>true</p>";
}

    if(($y > 2) && ($x == 1)) { echo "vrai";}

    //&& (AND) renvoie true si toutes les comparaisons sont vrais 