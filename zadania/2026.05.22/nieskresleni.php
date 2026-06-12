<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nieskresleni.css">
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

    $query = '
    SELECT 	CONCAT(czytelnicy.Imie, " ", czytelnicy.Nazwisko) AS "czytelnik",
		czytelnicy.Plec,
        czytelnicy.Data_ur,
        czytelnicy.Ulica AS "ulica",
        czytelnicy.Miasto AS "miasto",
        czytelnicy.Nr_legitymacji,
        czytelnicy.Data_zapisania,
        czytelnicy.Kod AS "kod"
FROM czytelnicy
WHERE czytelnicy.Data_skreslenia IS NULL
ORDER BY Nr_legitymacji ASC;
    ';

    $result = mysqli_query($conn, $query);
    ?>
    <table>
        <tr>
            <th>Czytelnik</th>
            <th>Płeć</th>
            <th>Data urodzenia</th>
            <th>Adres</th>
            <th>Numer legitymacji</th>
            <th>Data zapisania</th>
        </tr>
    <?php 

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            if($row["Plec"] === "M"){
                $plec = "mężczyzna";
            } else {
                $plec = "kobieta";
            }
            $kod_split = str_split($row['kod']);
            $kod_poczt = $kod_split[0] .  $kod_split[1] . "-" . $kod_split[2] .  $kod_split[3] .  $kod_split[4];
            echo "<tr>";
            echo "<td>" . $row["czytelnik"] . "</td>" . 
            "<td>" . $plec . "</td>" . 
            "<td>" . $row["Data_ur"] . "</td>" . 
            "<td>" . $row["ulica"] . " <br>" . $kod_poczt . " " . $row['miasto'] . "</td>" . 
            "<td>" . $row["Nr_legitymacji"] . "</td>" . 
            "<td>" . $row["Data_zapisania"] . "</td>";
            echo "</tr>";
        }
    }
    else {
        echo "Brak danych";
    }

    mysqli_close($conn);

    ?>
    </table>
</body>
</html>