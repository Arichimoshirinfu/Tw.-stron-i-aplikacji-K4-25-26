<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sumaparzystychdwucyfrowych.css">
</head>
<body>
    
    <p>  

        <?php 
        $y= ((10+98)/2)*45;
        for ($x=10 ; $x<=98; $x++)
            if($x % 2 == 0)
            echo "$x|"
        ?>

    </p>

    <p> Suma powyższych liczb jest równa <?php echo $y ?> </p>

         
    
</body>
</html>