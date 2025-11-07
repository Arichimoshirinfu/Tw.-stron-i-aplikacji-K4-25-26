<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href=pole_trapezu.css>
</head>
<body>

<?php 
$a=15;
$b=17;
$h=8;
?>
<blockquote><p> Pole trapezu o podstwach długości <?= $a ?> i <?= $b ?> oraz wysokości równej <?= $h ?> wynosi <b><?php echo (($a + $b) * $h) / 2 ?> j&sup2; </b> </p> </blockquote>
</body>
</html>