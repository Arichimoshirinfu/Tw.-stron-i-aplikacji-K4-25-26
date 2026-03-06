<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $plusy = rand(0,10);
    ?>
    <blockquote><?=  $plusy ?></blockquote>
    <br>
    <blockquote>
    <?php
    if($plusy == 1)
        echo "+";
    elseif($plusy == 2)
        echo "++";
    elseif($plusy == 3)
        echo "+++";
    elseif($plusy == 4)
        echo "++++";
    elseif($plusy == 5)
        echo "+++++";
    elseif($plusy == 6)
        echo "++++++";
    elseif($plusy == 7)
        echo "+++++++";
    elseif($plusy == 8)
        echo "++++++++";
    elseif($plusy == 9)
        echo "+++++++++";
    else 
        echo "Wartość jest poza zakresem <1,9>"
    
    ?>
    </blockquote>
</body>
</html>