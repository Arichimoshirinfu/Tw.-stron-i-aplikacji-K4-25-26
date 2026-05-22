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
    echo "<h3>Sposób 1</h3>";
    if(!$conn)
        echo "Połączenie z bazą nieudane, kod błędu:" . mysqli_connect_errno();
    else
        echo "Połączono";

    $query = '
    SELECT 	CONCAT(czytelnicy.Imie, " ", czytelnicy.Nazwisko) AS "czytelnik",
		czytelnicy.Plec,
        czytelnicy.Data_ur,
        CONCAT(czytelnicy.Ulica, " ", czytelnicy.Kod, " ", czytelnicy.Miasto) AS "adres",
        czytelnicy.Nr_legitymacji,
        czytelnicy.Data_zapisania
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
            $test = if($row["Plec"] == "M"){echo "mężczyzna"} else {echo "kobieta"};
        echo "<tr>";
        echo "<td>" . $row["czytelnik"] . "</td>" . 
        "<td>" . $test . "</td>" . 
        "<td>" . $row["Data_ur"] . "</td>" . 
        "<td>" . $row["adres"] . "</td>" . 
        "<td>" . $row["Nr_legitymacji"] . "</td>" . 
        "<td>" . $row["Data_zapisania"] . "</td>";
        echo "</tr>";
        }
    }
    else{
        echo "Brak danych";
    }

    mysqli_close($conn);

    ?>
    </table>
</body>
</html>