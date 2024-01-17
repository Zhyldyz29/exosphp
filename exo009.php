<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
 require 'fonctions.php';

 $ageetudiants = ["Mathilde" => 27, "Paul"=>26, "Amandine"=>24];

 debug($ageetudiants);
 
 $mailsetudiants["Mathilde"] = "mathilde@gmail.com";
 $mailsetudiants["Paul"] = "paul@gmail.com";
 $mailsetudiants["Amandine"] = "amandine@gmail.com";

 debug($mailsetudiants);

 foreach($mailsetudiants as $cle =>$valeur) { ?>

 <h1> <?= $cle ?></h1>
 <p> <?= $valeur ?></p>
<hr>
 <?php }?>
    
</body>
</html>