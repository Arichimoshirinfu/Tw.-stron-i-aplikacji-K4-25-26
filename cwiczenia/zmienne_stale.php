<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
    .ramka{
        color:#CED166;
        border-color:#FF38F6;
        border: 2px;
        border-style:solid;
        padding:10px; 
        text-shadow: 2px 2px #8312B0;
    }
</style>
</head>


<body>
    
<?php 
#zadanie 1
$ciag_znakow ='Ala ma kota';
$calkowita ='-5555555';
$liczba_zmiennoprzecinkowa ='0.50050505';
$bol =true;

define("pierwsza" , "1994");
define("ononn" , "Miramax");
?>

<h3>

<?php #zadanie 2 ?>

<p> echo dla ciągu znaków: <span class='ramka'> 
<?php echo $ciag_znakow;?> </span> </p>
<br>

<p> echo dla liczby całkowitej: <span class='ramka'> 
<?php echo $calkowita; ?> </span></p>
<br>

<p> echo dla liczby rzeczywistej: <span class='ramka'>
<?php echo $liczba_zmiennoprzecinkowa; ?> </span>
<br>

<p> echo dla wartości bool'owskiej <span class='ramka'> 
<?php echo $bol; ?> </span></p>
<br>

<h3>
<hr>

<p> var_dump dla ciągu znaków: <span class='ramka'>
<?php var_dump($ciag_znakow) ?> </span></p>
<br>

<p> var_dump dla liczby całkowitej: <span class='ramka'>
<?php var_dump($calkowita) ?> </span></p>
<br>

<p> var_dump dla liczby rzeczywistej: <span class='ramka'>
<?php var_dump($liczba_zmiennoprzecinkowa) ?> </span> </p>
<br>

<p> var_dump dla wartości bool'owskiej: <span class='ramka'>
<?php var_dump($bol) ?> </span> </p>
<br>

<?php #zadanie 3 ?>
<?php 

?>
<hr>

<p> print dla pierwszej stałej: define <span class='ramka'>
<?php print pierwsza; ?> </span> </p>
<br>

<p> print dla drugiej stałej: <span class='ramka'>
<?php print ononn ?> </span> </p>
<br>

<hr>

<p> var_export dla pierwszej stałej: <span class='ramka'>
<?php var_export(pierwsza) ?> </span> </p>
<br>

<p> var_export dladrugiej stałej:<span class='ramka'>
<?php var_export(ononn) ?> </span> </p>
<br>

</body>
</html>