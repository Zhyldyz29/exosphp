<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

require('fonctions.php');

if (file_exists('exports.csv') && is_file('exports.csv')) {

$handler = fopen('exports.csv', 'r');

echo "<table>"; // continuer le tableau.

while(!feof($handler)) {
    $ligne= fgets ($handler);
    //debug($ligne);
    //echo (gettype($ligne));
    // explode est equivalent du split de JS 
    $tab = explode(';', $ligne);
    debug($tab);

}
}
?>


</body>
</html>