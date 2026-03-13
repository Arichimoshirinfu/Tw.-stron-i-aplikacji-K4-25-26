<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script>
        document.getElementById("maks").innerHTML = "Maks to bot", makss;
        let makss = "maks to bot"
    </script>
</head>
<body>
    
    <?php
    $dni_tyg = array("1" => "poniedziałek",
                     "2" => "wtorek",
                     "3" => "środa",
                     "4" => "czwartek",
                     "5" =>"piątek",
                     "6" => "sobotę",
                     "7" => "niedzielę");

    $nazwy_mies = array("stycznia", "lutego", "marca", "kwiecień", "maj", "czerwiec", "lipiec", "sierpień", "wrzesień", "października", "listopada", "grudnia");

    ?>

    <p> Mój pierwszy czwartek z php był w <?= $dni_tyg[4] ?>, 3 <?=  $nazwy_mies[9] ?> 2025 roku.</p>

    <p> Moja śmierć nadejdzie w <?= $dni_tyg[5] ?>, 6 <?=  $nazwy_mies[10] ?> 2050 roku.</p>

    <p> Moją pierwszą jedynkę z php dostanę w <?= $dni_tyg[5] ?>, 6 <?=  $nazwy_mies[10] ?> 2050 roku.</p>

    <p id="maks"></p>
    
</body>
</html>