<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="pwn_lub_helion.css">
</head>
<body>
    
    <?php 
    
    $user = "brozyna";
    $localhost = "localhost";
    $password = "123123d";
    $database = 'brozyna';

    $conn = mysqli_connect($localhost, $user, $password, $database);
    echo "<h3>Sposób 1</h3>";
    if(!$conn)
        echo "Połączenie z bazą nieudane, kod błędu:" . mysqli_connect_errno();
    else
        echo "Połączono";

    $query = '
    SELECT 	ksiazki.Sygnatura,
		ksiazki.Tytul,
        CONCAT(ksiazki.Imie, " ", ksiazki.Nazwisko) AS "autor",
        ksiazki.Wydawnictwo,
        ksiazki.Rok_wyd,
        ksiazki.Cena
FROM ksiazki
WHERE (ksiazki.Wydawnictwo = "PWN" OR ksiazki.Wydawnictwo = "Helion") AND ksiazki.Rok_wyd > 1990 AND ksiazki.Rok_wyd < 2011
ORDER BY ksiazki.Rok_wyd ASC;
    ';

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo '<table><tr><th>Sygnatura</th><th>Tytuł</th><th>Autor</th><th>Wydawnictwo</th><th>Rok wydania</th><th>Cena</th></tr>';
        while($row = mysqli_fetch_assoc($result)){
            echo "<tr>";

            $cena_przedIpo = explode("." ,$row["Cena"]);

            echo "<td>" . $row['Sygnatura'] . "</td>" .
                 "<td>" . $row['Tytul'] . "</td>" .
                 "<td>" . $row['autor'] . "</td>" . 
                 "<td>" . $row['Wydawnictwo'] . "</td>" . 
                 "<td>" . $row['Rok_wyd'] . 
                 "</td>" . "<td>" . $cena_przedIpo["0"] . " zł " . $cena_przedIpo['1'] . " gr" . "</td></tr>";
        }
        echo '</table>';
    }
    else{
        echo "Brak danych";
    }

    echo "<hr>";
    echo "<h3>Sposób 2</h3>";
    $query2 = 'SELECT ksiazki.Sygnatura,
		ksiazki.Tytul,
        CONCAT(ksiazki.Imie, " ", 						ksiazki.Nazwisko) AS "autor",
        ksiazki.Wydawnictwo,
        ksiazki.Rok_wyd,
        CONCAT(SUBSTRING_INDEX(ksiazki.Cena, ".", 1), " zł ", SUBSTRING_INDEX(ksiazki.Cena, ".", -1), " gr ") AS "Cena"
FROM ksiazki
WHERE (ksiazki.Wydawnictwo = "PWN" OR ksiazki.Wydawnictwo = "Helion") AND ksiazki.Rok_wyd > 1990 AND ksiazki.Rok_wyd < 2011
ORDER BY ksiazki.Rok_wyd ASC;';

    $result2 = mysqli_query($conn, $query2);

    if(mysqli_num_rows($result2) > 0){
        echo '<table><tr><th>Sygnatura</th><th>Tytuł</th><th>Autor</th><th>Wydawnictwo</th><th>Rok wydania</th><th>Cena</th></tr>';
        while($row = mysqli_fetch_assoc($result2)){
            echo "<tr>";

            $cena_przedIpo = explode("." ,$row["Cena"]);

            echo "<td>" . $row['Sygnatura'] . "</td>" .
                 "<td>" . $row['Tytul'] . "</td>" .
                 "<td>" . $row['autor'] . "</td>" . 
                 "<td>" . $row['Wydawnictwo'] . "</td>" . 
                 "<td>" . $row['Rok_wyd'] . 
                 "</td>" . "<td>" . $row["Cena"] . "</td></tr>";
        }
        echo '</table>';
    }
    else{
        echo "Brak danych";
    }

    mysqli_close($conn);
    
    ?>

</body>
</html>