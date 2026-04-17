<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="formularz_zamowienia.css">
</head>
<body>
    <?php 
    $errnazwa = '';
    $errpakowanie = '';
    $errwaga = '';
    $erremail = '';
    $errdodat = '';
    $errzgoda = '';
    if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['nazwt']))
            $errnazwa = 'Podaj nazwę produktu';
        if(empty($_POST['opcja_pakowania']))
            $errpakowanie = 'Wybierz opcje pakowania';
        if(empty($_POST['pakowanie']))
            $errwaga = 'Określ przybliżoną wagę paczki';
    ?>
    <form action="" method="post">

    <label  for="nazwt">Nazwa towaru</label><span class=star> *</span><br>
    <input type="text" name="nazwt" id="nazwt" <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['nazwt'])) echo 'class="error"' ?>><br><span class="star"><?= $errnazwa ?></span><br>


    
    <label for="opcja_pakowania">Wybierz opcje pakowania:</label><span class=star> *</span><br>

    <div <?php if($_SERVER['REQUEST_METHOD'] == 'POST')
        if(empty($_POST['opcja_pakowania'])) echo 'class="error"'; ?>
        >

    <input type="checkbox" name="opcja_pakowania" value="koperta" id="koperta">
    <label for="koperta">koperta</label><br>

    <input type="checkbox" name="opcja_pakowania" value="folia" id="folia">
    <label for="folia">folia</label><br>

    <input type="checkbox" name="opcja_pakowania" value="folia bąbelkowa" id="folia bąbelkowa">
    <label for="folia bąbelkowa">folia bąbelkowa</label><br>

    <input type="checkbox" name="opcja_pakowania" value="karton" id="karton">
    <label for="karton">karton</label><br>

    <input type="checkbox" name="opcja_pakowania" value="karton z usztywnieniem" id="kartonplus">
    <label for="kartonplus">karton z usztywnieniem</label></div><br>
    <?= $errpakowanie ?>
    <br>



    <label for="pakowanie">Podaj wagę paczki:</label><span class=star> *</span><br>

    <input type="radio" name="pakowanie" value="2kg" id="2kg">
    <label for="2kg">do 2 kg</label><br>

    <input type="radio" name="pakowanie" value="2do5kg" id="2do5kg">
    <label for="2do5kg">od 2 do 5 kg</label><br>

    <input type="radio" name="pakowanie" alue="5do10kg" id="5do10kg">
    <label for="5do10kg">od 5 do 10 kg</label><br>

    <input type="radio" name="pakowanie" value="od10do15kg" id="od10do15kg">
    <label for="od10do15kg">od 10 do 15 kg</label><br>



    <label for="email">Email kontaktowy:</label><span class=star> *</span><br>
    <input type="email" name="email" id="email"><br><br>



    <label for="info">Dodatkowe informacje</label><br>
    <textarea name="info" id="info"></textarea><br><br>



    <input type="checkbox" name="przdane" id="przdane" value="zgodanadane">
    <label for="przdane">Zgoda na przetwarzanie danych</label><span class=star> *</span><br><br><br>



    <button type="submit" value="wyslij">Wyślij</button>
    </form>

    <?php print_r($_POST) ?>
</body>
</html>