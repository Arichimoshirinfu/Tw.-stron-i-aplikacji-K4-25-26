<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="waluty.css">
</head>
<body>
    <?php
    $test = $_POST['wybierz'];
    $waluta = $_POST['waluta'];
    $numer = $_POST['numer'];
    if(empty($test))
        echo '
    <form action="" method="post">

    <label for="numer">Podaj kwotę:</label>
    <input type="number" name="numer" id="numer"><br>

    <label for="waluta">Wybierz walutę:</label>
    <select name="waluta" id="waluta">

    <option value="Dolar USA">Dolar USA</option>
    <option value="Euro">Euro</option>
    <option value="Frank szwajcarski">Frank szwajcarski</option>
    <option value="Funt szterling">Funt szterling</option>

    </select><br>

    <button type="submit" value="Wybierz" name="wybierz">Wybierz</button>
    </form>
    ';
    else
        echo "Oto twój wybór: $numer" 
   ?>
</body>
</html>