<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="sortaso.css">
</head>
<body>
    
    <?php 
    $tablica = [
        "Skazani na Shawshank" => "dramat",
        "Nietykalni" => "biograficzny",
        "Władca Pierścieni: Powrót króla" => "fantasy",
        "Pulp Fiction" => "gangsterski",
        "Siedem" => "kryminał",
        "Podziemny krąg" => "thriller",
        "Django" => "western",
        "Król Lew" => "animacja",
        "Avengers: Wojna bez granic" => "akcja",
        "Dobry, zły i brzydki" => "western",
    ];

    asort($tablica);
    ?>

    <table>
            <caption> Sortowanie rosnąco wg. wartości [asort] </caption>
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
            <?php 
            foreach ($tablica as $warros => $warros2)
                echo "<tr><td>$warros</td><td>$warros2</td></tr>"; 
            ?>
    </table>

    <?php ksort($tablica)?>

    <table>

            <caption>Sortowanie rosnąco wg. kluczy [ksort]</caption>
        
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
            <?php 
            foreach ($tablica as $warros => $warros2)
                echo "<tr><td>$warros</td><td>$warros2</td></tr>"; 
            ?>
    </table>

<br>

    <?php arsort($tablica)?>

    <table>
        
    <caption> Sortowanie malejąco wg. wartości [arsort] </caption>

        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
            <?php 
            foreach ($tablica as $warros => $warros2)
                echo "<tr><td>$warros</td><td>$warros2</td></tr>"; 
            ?>
    </table>

    <?php krsort($tablica)?>

    <table>
      
            <caption>Sortowanie malejąco wg. kluczy [krsort] </caption>
        
        <tr>
            <th>Klucz</th>
            <th>Wartość</th>
        </tr>
            <?php 
            foreach ($tablica as $warros => $warros2)
                echo "<tr><td>$warros</td><td>$warros2</td></tr>"; 
            ?>
    </table>

</body>
</html>