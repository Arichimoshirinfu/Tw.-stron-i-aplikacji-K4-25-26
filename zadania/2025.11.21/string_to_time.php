<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="stringtotime.css">
</head>
<body>
<p class="one"> Data za 10 tygodni: <?= date("d-m-Y", strtotime("+10 weeks")) ?> </p>

<p class="two"> Wigilia Bożego Narodzenia wypadnie w <?= date("N", strtotime("24 december 2222")) ?> dniu tygodnia w 2222 roku. </p>

<p class="three"> Dzień tygodnia, w którym rozpoczął się stan wojenny w Polsce: <?= date("l", strtotime("13 december 1981")) ?> </p>
</body>
</html>