<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    //fonctions
    function bonjour(...$prenoms) {
        // pour chaque elements étant p 
        foreach ($prenoms as $p) {
            echo " bonjour ".$p."<br>";
        }
    }

    bonjour("pierre","pol","jak","pauline")
    ?>
</body>
</html>