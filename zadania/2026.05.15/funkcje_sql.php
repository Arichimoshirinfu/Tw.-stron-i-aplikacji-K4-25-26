<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
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

    $query = 'SELECT 
                UPPER(CONCAT(pracownicy.Imie, " ", pracownicy.Nazwisko)) AS "Imię i nazwisko"
                FROM pracownicy
    ';
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo "<ul>";
        while($row = mysqli_fetch_assoc($result)){
            echo '<li>' . $row["Imię i nazwisko"] . "</li>";
        }
        echo "</ul>";
    }
    else{
        echo 'Brak danych';
    }

    mysqli_close($conn);
    ?>

</body>
</html>