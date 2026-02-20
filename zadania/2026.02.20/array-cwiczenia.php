<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <?php
    $array =  array(1,2,3,4,5,6,7,8,9,10)
    ?>

    <h2>Funkcja <code>array_fill</code> :</h2>
    <?php 
    $arrayfill = array_fill("0", 10, "kupsztal");
    print_r ($arrayfill)
    ?>

    <h2>Funkcja <code>array_key_exists</code> :</h2>

    <?php 
    $arraykeyexists = array_key_exists(1, $array);
    echo $arraykeyexists
    ?>

    <p>Funkcja sprawdza czy tablica zawiera </p>
</body>
</html>