<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <ol>
    <li style="list-style-type:lower-greek">server software: <?php echo $_SERVER['SERVER_SOFTWARE'] ?></li>

    <li style="list-style-type:lower-greek">oprogramowanie klienta: <?php echo $_SERVER['USER_AGENT'] ?></li>

    <li style="list-style-type:lower-greek">nazwa i wersja protokołu użytego podczas odbierania żądania od klienta: <?php echo $_SERVER['SERVER_PROTOCOL'] ?></li>

    <li style="list-style-type:lower-greek">czas rozpoczęcia bieżącego żądania<?php echo $_SERVER['REQUEST_TIME'] ?></li>

    <li style="list-style-type:lower-greek">zmienna środowiskowa: <?php echo $_SERVER['PATH'] ?></li>

    <li style="list-style-type:lower-greek">nazwa serwera:  <?php echo $_SERVER['SERVER_NAME'] ?></li>

    <li style="list-style-type:lower-greek">metoda jaką zostało obsłużone żądanie: <?php echo $_SERVER['REQUEST_METHOD'] ?></li>

    </ol>
</body>
</html>