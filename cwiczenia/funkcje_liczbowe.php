<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link>

    <style>
        .kolor{
            color:aliceblue;
            background-color:darkblue;
            font-weight:bold;
        }
    </style>

</head>
<body>    

<p class="kolor"> Wartość zwracana przez funkcję abs(): <?php echo abs(-1000) ?> </p>

<p class="kolor"> Wartość zwracana przez funkcję min(0 , 150 , 30 , 20 , -8 , -200): <?php echo min(0 , 150 , 30 , 20 , -8 , -200) ?> </p>

<p class="kolor"> Wartość zwracana przez funkcję max(0 , 150 , 30 , 20 , -8 , -200 ): <?php echo max(0 , 150 , 30 , 20 , 8 , -200) ?> </p>

<p class="kolor"> Wartość zwracana przez funkcję pi(): <?php echo pi() ?> </p>

<p class="kolor"> Wartość zwracana dla liczby 3.4 przez funkcję round(3.4): <?php echo round(3.4) ?> </p>

<p class="kolor"> Wartość zwracana dla liczby 3.6 przez funkcję round(3.6): <?php echo round(3.6) ?> </p>

<p class="kolor"> Wartość zwracana dla liczby 5.045 przez funkcję round(5.045 , 2): <?php echo round(5.045 , 2) ?> </p>

<p class="kolor"> Wartość zwracana dla liczby 5.055 przez funkcję round( 5.055 , 2): <?php echo round(5.055 , 2) ?> </p>

<p class="kolor"> Wartość zwracana przez funkcję rand(900 , 1000): <?php echo rand(900 , 1000) ?> </p>

<p class="kolor"> Wartość zwracana dla liczby 0 przez funkcję sqrt(0): <?php echo sqrt(0)?> </p>

<p class="kolor"> Wartość zwracana dla liczby 64 przez funkcję sqrt(64): <?= sqrt(64) ?></p>

<p class="kolor"> Wartość zwracana dla liczby 256 przez funkcję sqrt(256): <?= sqrt(256) ?></p>

<p class="kolor"> Wartość zwracana dla liczby 65536 przez funkcję sqrt(65536): <?= sqrt(65536) ?></p>

</body>
</html>