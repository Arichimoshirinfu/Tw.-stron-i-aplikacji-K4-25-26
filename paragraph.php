<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .red{
            color:red;
        }

        .blue{
            color:#336ee1;
        }

        .green{
            color:green;
            text-decoration-line: underline overline;
        }
        </style>
</head>
<body>
    
<?php
$a=97;
$b=3.14;
$c='PHP';
?>

 <!-- SPOSOB 1 -->

<h3 class="red"> <?= $a ?> jest liczbą pierwszą  </h3>
    

<p> <span class="blue"> Liczba Pi zaokrąglona do dwóch miejsc po przecinku: <?= $b ?> </span> </p> 
<br>

<div> <span class="green"> <?= $c ?> to język skryptowy wykonywany po stronie serwera </span> </div>

<!-- SPOSOB 2 -->
<br>
<hr color=purple>

<h3 style="color:red">  <?= $a ?> jest liczbą pierwszą </h3>

<p style="color:blue"> Liczba Pi zaokrąglona do dwóch miejsc po przecinku <?= $b ?> </p>

<div style="color:green;text-decoration: underline overline;"> <?= $c ?> to język skryptowy wykonywany po stronie serwera </div>

</body>
</html>