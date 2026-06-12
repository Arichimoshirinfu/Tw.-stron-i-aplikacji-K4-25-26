<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table{
            border-collapse: collapse;
        }
        th,td,tr{
            border: 1px black solid;
        }
    </style>
</head>
<body>
    
    <?php 
    $hostname = "localhost";
    $username = "brozyna";
    $password = "123123d";
    $database = "brozyna";
    $conn = mysqli_connect($hostname, $username, $password, $database);

    $query = '
    SELECT  wypozyczenia.Nr_transakcji AS "nrtran",
		wypozyczenia.Data_wypozyczenia AS "datawyp",
        wypozyczenia.Data_zwrotu AS "datazwr",
        DATEDIFF(IFNULL(wypozyczenia.Data_zwrotu, now()), wypozyczenia.Data_wypozyczenia) AS ldni
    FROM wypozyczenia
    ORDER BY ldni ASC

    ';
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) > 0){
        echo "<table>" . "<tr><th>Numer transakcji</th><th>Data wypożyczenia</th><th>Data zwrócenia</th><th>Liczba dni</th>";
        while($row = mysqli_fetch_assoc($result)){
            if($row['ldni'] % 2 === 0){
                $parzyste = "background-color: aliceblue";
            } else {
                $parzyste = "";
            }
            echo "<tr style='" . $parzyste . "'><td>" . $row['nrtran'] . "</td>" . 
            "<td>" . $row['datawyp'] . "</td>" . 
            "<td>" . $row['datazwr'] . "</td>" . 
            "<td>" . $row['ldni'] . "</td>";
        }
        echo "</table>";
    }




    mysqli_close($conn)
    ?>

</body>
</html>