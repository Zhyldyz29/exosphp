<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$x = 4;
if ($x>=0 ){
echo "x est positif <br>";
} else {
    echo "x est negatif"; 
}
 // en operateur ternaire
 echo $x >=0 ? "x est positif": "x est negatif";
 // si la comparaison est vrai (?) affichage de "x est possitif"
 // affichage de x est negatif

 switch ($x) {
    case 0:
    echo "x est 0";
    break;
    case 1:
        echo "x est 1";
        break;
    case 2:
        echo "x est 2";
        break;
    case 3:
        echo "x est 3";
        break;
    case 4:
        echo "x est francisco";
        break;
    default:
    echo "bug";

 }

?>    

</body>
</html>