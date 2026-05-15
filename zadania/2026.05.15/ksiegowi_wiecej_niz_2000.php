<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ksiegowi_wiecej_niz_2000.css">
</head>
<body>
    
    <?php 
    
    $servername = 'localhost';
    $username = 'brozyna';
    $password = "123123d";
    $database = 'brozyna';

    $conn = mysqli_connect($servername, $username, $password, $database);

    if(!$conn){
        echo 'Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ' . mysqli_connect_error();
    }
    else{
        echo 'Połączono, HEJ!';
    }

    echo "<table>";

    $query = 'SELECT CONCAT(Imie, " ", Nazwisko) AS "imnaz",
                    Miasto,
                    Data_zatrudnienia,
                    Wynagrodzenie
                FROM pracownicy
                WHERE pracownicy.wynagrodzenie > 2000 AND Id_stanowisko = (SELECT stanowiska.Id_stanowisko FROM stanowiska WHERE stanowiska.Nazwa = "Księgowy")
                ORDER BY pracownicy.Wynagrodzenie DESC; 
    
    ';
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0 ){
        echo "<tr><th>Pracownik</th><th>Miasto</th><th>Data zatrudnienia</th><th>Wynagrodznie</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["imnaz"] . "</td><td class='center'>" . $row["Miasto"] . "</td><td class='right'>" . $row["Data_zatrudnienia"] . "</td>" . "<td class='right'>" . $row["Wynagrodzenie"] . "</td></tr>";
        }

    }
    else{
        echo 'Brak danych';
    }

    echo '</table>';
    mysqli_close($conn)
    ?>

</body>
</html>