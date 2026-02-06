<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="jest_podzielna.css">
</head>
<body>
    
    <?php 
    $losowa= rand(1,30)
    ?>

    <p> Liczba <?php echo $losowa ?> jest podzielna przez:  </p>

    <ul>
        
        <?php 
        if ($losowa % 2 == 0)
            echo ("<li>dwa</li>");
        ?>
        

        
         <?php 
        if ($losowa % 3 == 0)
            echo ("<li>trzy</li>");
        ?>
        

        
         <?php 
        if ($losowa % 4 == 0)
            echo ("<li>cztery</li>");
        ?>
        

        
         <?php 
        if ($losowa % 5 == 0)
            echo ("<li>pięć</li>");
        ?>
        

        
         <?php 
        if ($losowa % 6 == 0)
            echo ("<li>sześć</li>");
        ?>
        

        
         <?php 
        if ($losowa % 7 == 0)
            echo ("<li>siedem</li>");
        ?>
        

        
         <?php 
        if ($losowa % 8 == 0)
            echo ("<li>osiem</li>");
        ?>
        
        
         <?php 
        if ($losowa % 9 == 0)
            echo ("<li>dziewięć</li>");
        ?>

    </ul>

</body>
</html>