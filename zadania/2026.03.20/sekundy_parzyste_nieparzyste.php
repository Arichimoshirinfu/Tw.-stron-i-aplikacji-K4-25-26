<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="spn.css">
</head>
<body>
    <?php 
    $czas = time();

    if($czas % 2 == 0)
        echo "<p><span class='parzyste'>" . date("H:i:s", $czas) . "</span></p>";
    else
        echo "<p><span class='nieparzyste'>" . date("H:i:s", $czas) . "</p></span>";
    ?>
    
</body>
</html>