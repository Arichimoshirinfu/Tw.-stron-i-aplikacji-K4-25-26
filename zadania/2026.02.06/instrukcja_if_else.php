<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="instrukcja_if_else.css">
</head>
<body>
    
    <?php 
    $losowa= rand(1,30);
    ?>

    <h2 class="doch"> <?php echo $losowa ?> </h2>
    
    <h4 class="losowah4">
    <?php 
    if ($losowa >= 20)
        echo "Wylosowana liczba jest większa lub równa 20";
    ?>
</h4>



<h4 class="parzysta">
    <?php 
    if ($losowa % 2 == 0)
        echo "Wylosowana liczba jest parzysta";
    else if ($losowa % 2 == 1)
        echo "Wylosowana liczba jest nieparzysta";
    ?>
</h4>



<h4 class="dziesiatki">
    <?php
    if ($losowa <= 10)
        echo "Pierwsza dziesiątka";
    else if ($losowa <= 20)
        echo "Druga dziesiątka";
    else
        echo "Trzecia dziesiątka";
    ?>
    

    </h4>

</body>
</html>