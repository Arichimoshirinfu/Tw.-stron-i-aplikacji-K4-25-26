<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="funkcjashuffle.css">
</head>
<body>
    <table>
    <tr>
    <?php 
    $random = range(0,10,1);
    shuffle($random);
    foreach($random as $rand)
        echo "<td>$rand</td>"
    ?>
    <tr>
    <table>



</body>
</html>