<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="wiecejniz500.css">
</head>
<body>
    
    <?php 
    
    $user = "brozyna";
    $localhost = "localhost";
    $password = "123123d";
    $database = 'brozyna';

    $conn = mysqli_connect($localhost, $user, $password, $database);
    if(!$conn)
        echo "Połączenie z bazą nieudane, kod błędu:" . mysqli_connect_errno();
    else
        echo "Połączono";

    $query = 'SELECT ksiazki.Sygnatura,
		ksiazki.Tytul,
        CONCAT(ksiazki.Imie, " ", 						ksiazki.Nazwisko) AS "autor",
        dzialy.Nazwa,
        ksiazki.Wydawnictwo,
        ksiazki.Rok_wyd,
        ksiazki.Objetosc_ks,
        ksiazki.Cena
FROM ksiazki INNER JOIN dzialy ON ksiazki.Id_dzial = dzialy.Id_dzial
WHERE ksiazki.Objetosc_ks > 500
ORDER BY ksiazki.Objetosc_ks ASC;
    ';

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo '<table><th>Syngatura</th><th>Tytuł</th><th>Autor</th><th>Dział</th><th>Wydawnictwo</th><th>Rok wydania</th><th>Liczba stron</th><th>Cena</th>';
        while($row = mysqli_fetch_assoc($result))
            echo "<tr>
        <td>" . $row['Sygnatura'] . "</td>" . 
        "<td>" . $row['Tytul'] . "</td>" . 
        "<td>" . $row['autor'] . "</td>" . 
        "<td>" . $row['Nazwa'] . "</td>" . 
        "<td>" . $row['Wydawnictwo'] . "</td>" . 
        "<td>" . $row['Rok_wyd'] . "</td>" . 
        "<td>" . $row['Objetosc_ks'] . "</td>" . 
        "<td>" . $row['Cena'] . "</td></tr>";
        echo '</table>';
    }
    else{
        echo "Brak danych";
    }
    ?>

</body>
</html>