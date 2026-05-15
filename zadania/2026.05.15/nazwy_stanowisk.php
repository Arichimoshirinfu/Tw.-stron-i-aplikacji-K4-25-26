<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="nazwy_stanowisk.css">
</head>
<body>

    <?php 
    
    $servername = 'localhost';
    $username = 'brozyna';
    $password = "123123d";
    $database = 'brozyna';

    $conn = mysqli_connect($servername, $username, $password, $database);
    
    /*
    mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

    printf("Initial character set: %s\n, mysqli_character_set_name($conn)");

    mysqli_set_charset($conn,"utf8mb4");
    printf("Current character set: %s/n, mysqli_charcter_set_name($conn)");
    */

    if(!$conn){
        echo 'Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ' . mysqli_connect_error();
    }
    else{
        echo 'Połączono, HEJ!';
    }

    echo "<table>";

    $query = 'SELECT stanowiska.Nazwa AS "nazw"
                FROM stanowiska
    
    ';
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0 ){
        echo "<tr><th>Nazwa stanowiska</th><th>Liczba liter</th></tr>";
        while($row = mysqli_fetch_assoc($result)){
        echo "<tr>";
        echo "<td>" . $row["nazw"] . "</td><td style='text-align:right;'>" . strlen($row["nazw"]) . " liter</td></tr>";
        }

    }
    else{
        echo 'Brak danych';
    }
    ?>
    
    
    
    <?php
    echo "</table>";
    mysqli_close($conn)
    ?>

</body>
</html>