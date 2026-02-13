<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="od-10do10.css">
</head>
<body>
    
    <p>

        <?php 
        for ($a=-10; $a<=10; $a++)

        if ($a < 10)
            echo "$a,";
        else 
            echo "$a.";
        ?>

    </p>

</body>
</html>