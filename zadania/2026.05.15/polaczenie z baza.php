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
    $password = '123123d';
    $database = 'brozyna';
    $conn = mysqli_connect($servername, $username, $password, $database);

    if (!$conn){
        echo 'Próba połączenia z bazą danych zakończyła się niepowodzeniem. Błąd: ' . mysqli_connect_error();
    }
    else{
        echo 'Połączono, HEJ!';
    }
    $query = "SELECT * FROM czytelnicy";

    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo '<ol style="list-style-type:circle;">';
        while ($row = mysqli_fetch_assoc($result)){
            echo '<li>Numer: ' . $row['Nr_czytelnika'] . '. Imię i nazwisko: ' . $row['Imie'] . ' ' . $row['Nazwisko'] . '</li>';
        
        
        }
        echo '</ol>';
    }
    else{
            echo 'brak danych';
        }
    
    mysqli_close($conn);

    
    ?>
    <!--  ZADANIE 4   
    1. mysqli connect() - łączy się z bazą danych
    2. mysqli_query() - wykonuje zapytanie z bazy danych
    3. mysqli_num_rows() - sprawdza ile wierszy ma dana tabela i podaje wynik jako liczbę
    4. mysqli_fetch_assoc() - wyciąga wynik z zapytania z "mysqli_query" i podaje wynik jako tablica asocjacyjna
    5. mysqli_close() - zamyka polączenie z bazą danych  
    -->
</body>
</html>