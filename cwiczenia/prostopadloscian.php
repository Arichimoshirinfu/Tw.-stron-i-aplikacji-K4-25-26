<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="prostopadloscian.css">
</head>
<body>
<!--  ALT + Z ZASUWANIE TEKSTU --><!--  ALT + Z ZASUWANIE TEKSTU --><!--  ALT + Z ZASUWANIE TEKSTU --><!--  ALT + Z ZASUWANIE TEKSTU --><!--  ALT + Z ZASUWANIE TEKSTU --><!--  ALT + Z ZASUWANIE TEKSTU -->
<?php 
$a=5;
$b=12;
$c=84;
?>
<!-- d = a^2+b^2+c^2 pod pierwiastkiem -->
<div class="fiolet"><span class="obrot">&#9757;</span> Przekątna prostopadłościanu o krawędziach długości <?php echo "$a, $b i $c" ?> jest równa: <?php echo sqrt($a**2 + $b**2 + $c**2) ?> <span class="obrot2">&#9757;</span></div>
<!-- 2ab+2ac+2bc -->
<p class="purpur"><span class="pisanie">&#9997;</span> Pole prostopadłościanu o krawędziach długości <?php echo "$a, $b i $c" ?> jest równa: <?php echo 2*$a*$b+2*$a*$c+2*$b*$c ?> j&sup2; <span class=pisanie2>&#9997;</span></p>
</body>
</html>
