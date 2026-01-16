<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
p{
    font-weight:bold;
    text-align:center;
    font-family:'Courier New', Courier, monospace;
}

    </style>
</head>
<body>
    <?php 
    $a=15;
    $b=8;
    ?>
    <p>Długość przeciwprostokątnej trójkąta prostokątnego o przyprostokątnych długości <?= $a ?> i <?= $b ?> wynosi <?= sqrt(pow($a, 2) + pow($b, 2)) ?></p>
</body>
</html>