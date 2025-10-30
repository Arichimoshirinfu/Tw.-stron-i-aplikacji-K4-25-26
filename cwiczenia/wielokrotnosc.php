<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        #border{
            border-collapse: collapse;
        }

        .ramka{
           border-style:dashed; 
           border-color:navy;
           border-width:10px;
           padding:100px;
        }

        .czcionka{
            font-size:80px;
            color:red;
            font-weight:bold;
            margin:100px;
            text-shadow:5px 5px blue;
        }
        .czcionka2{
            font-size:40px;
            color:purple;
            font-weight:italic;
            margin:1px;
            text-shadow:1px 1px blue;
        }

        </style>
</head>
<body>
    <?php 
    $sza="ania je kota a kot je anie";
    $asz="pies i kot kot i pies ania i pies kot i ania";
    $liczba="77";
    $mnoznik2="2";
    $mnoznik3="3";
    $mnoznik4="4";

    $suma2=$liczba*$mnoznik2;
    $suma3=$liczba*$mnoznik3;
    $suma4=$liczba*$mnoznik4;
    ?>

<table id='border'>
<tr>
<td class='ramka czcionka'> <?php echo "$liczba" ?> </td>
<td class='ramka czcionka'> <?php print ("$suma2") ?> </td>
<td class='ramka czcionka'> <?php print ("$suma3") ?></td>
<td class='ramka czcionka'> <?php print ("$suma4") ?></td>
</tr>

</table>
<hr>

<p class='czcionka2'>Wynik dla strlen: <?= strlen("$liczba"); ?> </p> <br>

<p class='czcionka2'>Wynik dla str_word_count: <?= str_word_count("$sza") ?> </p> <br>

<p class='czcionka2'>Wynik dla strrev: <?= strrev("$sza") ?> </p> <br>

<p class='czcionka2'> Wynik dla strpos:<?= strpos("$sza", "$asz") ?> </p> <br>

<p class='czcionka2'> Wynik dla str_replace: <?= str_replace("$sza", "$asz", "$sza") ?> </p> <br>

<p class='czcionka2'> Wynik dla strtolower: <?= strtolower("$sza") ?> </p> <br>

<p class='czcionka2'>Wynik dla strtoupper:  <?= strtoupper("$sza") ?> </p> <br>

<p class='czcionka2'>Wynik dla ucwords:  <?= ucwords("$sza") ?> </p> <br>

<p class='czcionka2'>Wynik dla trim: <?= trim("$sza") ?> </p> <br>

<p class='czcionka2'>Wynik dla strstr: <?= strstr("$sza", "1") ?> </p> <br>

<p class='czcionka2'>Wynik dla substr: <?= substr("$sza", "12") ?> </p> <br>

<p class='czcionka2'>Wynik dla str_pad: <?= str_pad("$sza", "1") ?> </p> <br>

</body>
</html>