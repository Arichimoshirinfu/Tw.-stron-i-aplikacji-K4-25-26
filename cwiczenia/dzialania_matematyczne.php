<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel=stylesheet href=dzialaniamatematycznecss.css>
</head>
<body>
<!-- PUNKT 1 -->
    <?php
    $x = "5";
    $y = "15";
    ?>

<p class="kolor"> Wynik dodawania liczb 5 i 15 za pomocą polecenia echo $x + $y: <span class="span" ><?php echo $x + $y ?> </span></p>
<p class="kolor"> Wynik odejmowania liczb 5 i 15 za pomocą polecenia echo $x - $y: <span class="span" ><?php echo $x - $y ?> </span></p>
<p class="kolor"> Wynik mnożenia liczb 5 i 15 za pomocą polecenia echo $x * $y:<span class="span" > <?php echo $x * $y ?> </span></p>
<p class="kolor"> Wynik dzielenia liczb 5 i 15 za pomocą polecenia echo $x / $y: <span class="span" ><?php echo $x / $y ?> </span></p>
<p class="kolor"> Wynik reszty z dzielenia liczb 5 i 15 za pomocą polecenia echo $x % $y: <span class="span" ><?php echo $x % $y ?> </span></p>
<!-- PUNKT 2 -->
<?php 
$a="4";
$b="35";
?>
<?php //oblicz pole i obw protoąta o bokach $a 4   $b 35 ?>
<p class="kolor"> Pole prostokąta o bokach 4 i 35 wynosi: <span class="span"> <?php echo $a * $b ?> j&sup2; </span></p> 
<p class="kolor"> Obwód prostokąta o bokach 4 i 35 wynosi: <span class="span"> <?php echo $a * 2 + $b * 2?> </span></p> 

<!-- PUNKT 3 -->
 <?php $r="16";
 $alfa="93"
 ?>
<!-- Oblicz obwód pole koła o promieniu $r=16 oraz pole wcinka koła o kącie środkowym $alfa =93 (stopnie)-->
<p class="kolor"> Pole koła o promieniu 16 wynosi: <span class="span"> <?= pi() * $r ** 2 ?> j&sup2; </span> </p>
<p class="kolor"> Obwód koła o promieniu 16 wynosi:<span class="span"> <?= 2 * pi() * $r ?> </span></p>
<!-- a:360 * pi * r^2 -->
<p class="kolor"> Pole wycinka koła o kącie środkowym alfa=93 stopnie zaokrąglony do czterech miejsc po przecinku: 
   <span class="span"> <?php echo round($alfa / 360 * pi() * $r ** 2 , 4) ?> j&sup2;</span>
</p>
</body>
</html>