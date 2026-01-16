<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $teraz=time();
    $kiedys=strtotime("5 september 1914");
    $roznica=$teraz - $kiedys;
    echo $roznica / (60*60*24);
    
    ?>
</body>
</html>