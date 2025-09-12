<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
<?php 
#zadanie 1
$ciag_znakow ='Ala ma kota';
$calkowita ='-5555555';
$liczba_zmiennoprzecinkowa ='0.50050505';
$bol =true;
?>
<h3>
<?php#zadanie 2 ?>
<?php echo "echo dla ciągu znaków: " . $ciag_znakow; ?>
<br>
<?php echo "echo dla liczby całkowitej " . $calkowita; ?>
<br>
<?php echo "echo dla liczby rzeczywistej: " . $liczba_zmiennoprzecinkowa; ?>
<br>
<?php echo "echo dla wartości bool'owskiej: " . $bol; ?>
<br>
<h3>
<hr>

<?php echo "var_dump dla ciągu znaków: " , var_dump($ciag_znakow) ?>
<br>
<?php echo " var_dump dla liczby całkowitej: " , var_dump($calkowita) ?>
<br>
<?php echo " var_dump dla liczby rzeczywistej: " , var_dump($liczba_zmiennoprzecinkowa) ?>
<br>
<?php echo "var_dump dla wartości bool'owskiej: " , var_dump($bol) ?>
<br>

<?php #zadanie 3 ?>
<?php 
define("pierwsza" , "1994");
define("druga" , "Miramax");
?>
<hr>
<?php echo "print dla pierwszej stałej: " , print pierwsza; ?> <br>
<?php echo "print dla drugiej stałej: " , print druga ?> <br>
<hr>
<?php echo "var_export dla pierwszej stałej: " , var_export(pierwsza) ?>
<br>
<?php echo "var_export dla drugiej stałej: " , var_export(druga) ?>

</body>
</html>